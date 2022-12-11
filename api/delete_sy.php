<?php 
   
    include("dbconnection.php");

    require '../function.php';

    $db = new DatabaseClass();
    try {
       
      
        $data = $db->Remove("delete from sy where sy_id = ?", array($_POST["sy_id"]));
    } catch(\Exception $e) {
        echo "FAILED";
    }



?>