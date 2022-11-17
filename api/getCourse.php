<?php 
   
    include("dbconnection.php");
    
    
    try {
        $db = new DatabaseClass();
      
        $data = file_get_contents('php://input');
        $getDeatilsUser = $db->Select("select * from course order by descriptions asc");
        header('Content-Type: application/json; charset=utf-8');
        if(count($getDeatilsUser) > 0) {
            $data = array();
            foreach ($getDeatilsUser as $key => $value) {
                
                $data["id"] = $value["course_id"];
                $data["code"] = $value["code"];
                $data["descriptions"] = $value["descriptions"];
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