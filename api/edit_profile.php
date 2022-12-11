<?php 
   
    include("dbconnection.php");
    // header('Content-Type: application/json; charset=utf-8');
    
    
    try {
        $db = new DatabaseClass();
        
        if(isset($_GET["token"])){
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