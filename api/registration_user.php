<?php 
   
    include("dbconnection.php");
    
    
    try {
        $db = new DatabaseClass();
      
        // // Converts it into a PHP object
        // echo $data = json_encode($json);
        // //add your check here that is $data["username"] as bellow
        // // isset($data["username"])
        // return $data;
        if(isset($_POST)){
            $data = file_get_contents('php://input');
            $data = json_decode($data);
            $db->Insert('insert into error_logs (descriptions) values (?) ', array(json_encode($data)));
            if(isset($data->email) && isset($data->password)){
                $getDeatilsUser = $db->Select("select * from users where email = ? and password = ? and user_type = 2", array($data->email, $data->password));
                if(count($getDeatilsUser) > 0) {
                    if($getDeatilsUser[0]['status'] == 1) {
                        echo "FAILED";
                    } else {
                        echo "NOT_VERIFY";
                    }
                    
                }else {
                    $getDeatilsUser = $db->Insert("INSERT INTO users (email,password,username,status, user_type) VALUES (?,?,?,?,?)", array($data->email, $data->password, $data->first_name, 0,2));
                    if($getDeatilsUser){
                        $getDeatilsUser = $db->Insert("INSERT INTO personal_info (user_id,first_name,last_name,contact_no,course_id, sy_id) VALUES (?,?,?,?,?,?)", array( $getDeatilsUser,$data->first_name, $data->last_name, $data->mobile,$data->course,$data->sy));
                        echo "NOT_VERIFY";
                    } else {    
                        echo "FAILED";
                    }
                }
            }else {
                echo "FAILED";
            }
        } else {
            echo "FAILED";
        // $db->Insert("INSERT INTO `users` (email, password) VALUES (?,?)", array("marvin1@gmail.com", "marvin123"));
        }
    } catch(\Exception $e) {
        //echo "FAILED";
        echo $e->getMessage();
    }



?>