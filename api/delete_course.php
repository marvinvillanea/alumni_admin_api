<?php 
   
    include("dbconnection.php");

    require '../function.php';

    $db = new DatabaseClass();
    try {
       
      
        $data = $db->Remove("delete from course where course_id = ?", array($_POST["course_id"]));
    } catch(\Exception $e) {
        echo "FAILED";
    }



?>