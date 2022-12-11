<?php 
   
    include("dbconnection.php");
    
    
    try {
        $db = new DatabaseClass();
      
        $data = file_get_contents('php://input');
        $getDeatilsUser = $db->Select("select * from cron_job where status_id = 0 ");
        header('Content-Type: application/json; charset=utf-8');
        if(count($getDeatilsUser) > 0) {
            $data = array();
            foreach ($getDeatilsUser as $key => $value) {
                $data["data"] = json_decode($value["request_body"]);
                $data["cron_job_id"] = json_decode($value["cron_job"]);
                $store[] = $data;
            }
            $response = array(
                "code" => "200",
                "details" => $store
            );
            echo json_encode($response);
        } else {
           $response = [
            "error" => "NO data found"
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