<?php 
   
    include("dbconnection.php");
    
    
    try {
        $db = new DatabaseClass();
      
        // // Converts it into a PHP object
        // $data = json_encode($json);
        // //add your check here that is $data["username"] as bellow
        // // isset($data["username"])
        // return $data;
        $status = (isset($_POST["name"]) && $_POST["name"] == 'reject') ? 3 : 1;
        $data = $db->Update("update users SET status = ? WHERE user_id = ? ", array($status,$_POST["user_id"]));

    } catch(\Exception $e) {
        echo "FAILED";
    }



?>