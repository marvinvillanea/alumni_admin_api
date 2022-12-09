<?php 
   
    include("dbconnection.php");
    
    
    try {
        $db = new DatabaseClass();
        $request_data = file_get_contents('php://input');
        $request_data = json_decode($request_data);
        $token =  isset($request_data->token) ?$request_data->token : 'no data';
        
        $getSurvey = $db->Select("select * from survey order by created_at asc");
        header('Content-Type: application/json; charset=utf-8');
        if(count($getSurvey) > 0) {
            $data = array();
            foreach ($getSurvey as $key => $value) {
                $listed = $db->Select('select * from bullet_survey where survey_id = ?', array($value['survey_id']));

                $data["descriptions"] = $value["descriptions"];
                
                if(count($listed) > 0) {
                    $store2 = array();
                    foreach ($listed as $key => $value) {
                       $store2["descriptions"] = $value["descriptions"];
                       $store2["bullet_id"] = $value["bullet_id"];
                       $store2["token"] = $token ;
                       $store3[] = $store2;
                    }
                    // $store[] = $data1;
                    $data["listed"] = $store3;
                }
                
                
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