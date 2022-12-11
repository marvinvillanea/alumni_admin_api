<?php 
   
    include("dbconnection.php");
    
    
    try {
        $db = new DatabaseClass();
      
        // $data = file_get_contents('php://input');
        // $data = json_decode($data);
        // echo $data->token;
      
        $data = $db->Update("update cron_job SET status_id = 1 WHERE cron_job = ? ", array($_POST["cron_job_id"]));
        echo 'SUCCESS';
    } catch(\Exception $e) {
        $response = [
            "error" => $e->getMessage(). " --->>>>> ". $e->getLine()
        ];
        echo json_encode($response);
    }



?>