<?php 
   
    include("dbconnection.php");

    require '../function.php';

    $db = new DatabaseClass();
    try {
       
      
        $status = (isset($_POST["name"]) && $_POST["name"] == 'Unable') ? 1 : 0;
        $data = $db->Update("update users SET user_status = ? WHERE user_id = ? ", array($status,$_POST["user_id"]));
        echo "SUCCESS";
    } catch(\Exception $e) {
        echo "FAILED";
    }



?>