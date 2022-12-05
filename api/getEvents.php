<?php 
   
    include("dbconnection.php");
    
    
    try {
        $db = new DatabaseClass();
      

        
        $getDeatilsUser = $db->Select("select * from events  order by created_at desc");
        header('Content-Type: application/json; charset=utf-8');
        if(count($getDeatilsUser) > 0) {
            $data = array();
            foreach ($getDeatilsUser as $key => $value) {
                
                $data["event_id"] = $value["event_id"];
                $data["event_name"] = $value["event_name"];
                $data["when"] = $value["when"];
                $data["where"] = $value["where"];
                $data["desciptions"] = $value["desciptions"];
                $data["banner"] = $value["banner"];
                $store[] = $data;
                
            }
            $response = [
                "code" => "200",
                "details" => $store,
            ];
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