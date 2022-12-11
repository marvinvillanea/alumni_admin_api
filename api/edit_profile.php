<?php 
   
    include("dbconnection.php");
    // header('Content-Type: application/json; charset=utf-8');
    
    require '../function.php';
    try {
        $db = new DatabaseClass();
        
        if(isset($_GET["token"])){

            if(isset($_POST["update"])) {
                extract($_POST);
                $folder = "../images/profile/";
                $temp = explode(".", $_FILES["photo"]["name"]);
                $newfilename = $first_name.'_'.round(microtime(true)).'.'. end($temp);
                $db_path = $folder.$newfilename ;
                if ( is_uploaded_file( $_FILES['photo']['tmp_name'] ) ){
                    if (move_uploaded_file($_FILES['photo']['tmp_name'],$db_path))
                    {
                        try {
                            $image = getMyUrl().'/'.$db_path;
                            $db->Update("update `personal_info` SET `first_name` = ?, `last_name` = ?,`middle_name` = ?,`contact_no` = ?,`address` = ?, `image` = ? WHERE `user_id` = ? ", array($first_name,$last_name,$middle_name,$contact_no,$address,$image,$user_id));
                        } catch (\Exception $e) {
                            echo $e->getMessage();
                        }
                    }
                    
                } else {
                    $db->Update("update `personal_info` SET `first_name` = ?, `last_name` = ?,`middle_name` = ?,`contact_no` = ?,`address` = ? WHERE `user_id` = ? ", array($first_name,$last_name,$middle_name,$contact_no,$address,$user_id));
                }
                
            }

            $data = $db->Select("select * from access_token 
            inner join personal_info USING(user_id)
            where access_token = ?",array($_GET['token']));
            if(count($data) > 0) {
                // echo "dafdsafdasfa";
                $fullname = ucwords($data[0]["last_name"].', '.$data[0]["first_name"]);
                include('../pages/profile_page.php');
            } else {
                $response = [
                    "code" => "402",
                    "message" => "User not allowed"
                ];
                echo json_encode($response);
            }
            } else {
                $response = [
                    "code" => "402",
                    "message" => "User not allowed"
                ];
                echo json_encode($response);
                
            }

    } catch(\Exception $e) {
        $response = [
            "error" => $e->getMessage(). " --->>>>> ". $e->getLine()
        ];
        echo json_encode($response);
    }



?>