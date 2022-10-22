<?php 
   
    include("dbconnection.php");
    
    
    try {
        $db = new DatabaseClass();
      
        // // Converts it into a PHP object
        // $data = json_encode($json);
        // //add your check here that is $data["username"] as bellow
        // // isset($data["username"])
        // return $data;
        $data = $db->Update("update users SET status = 1 WHERE user_id = ? ", array($_POST["user_id"]));
    } catch(\Exception $e) {
        echo "FAILED";
    }



?>