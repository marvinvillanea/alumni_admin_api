<?php 
   
    include("dbconnection.php");

    require '../function.php';

    $db = new DatabaseClass();
    try {
       
      
        $data = $db->Remove("delete from job where job_id = ?", array($_POST["jobid"]));
    } catch(\Exception $e) {
        echo "FAILED";
    }



?>