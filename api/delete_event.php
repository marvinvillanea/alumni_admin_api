<?php 
   
    include("dbconnection.php");

    require '../function.php';

    $db = new DatabaseClass();
    try {
       
      
        $data = $db->Remove("delete from events where event_id = ?", array($_POST["event_id"]));
    } catch(\Exception $e) {
        echo "FAILED";
    }



?>