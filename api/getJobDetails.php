<?php 
   
    include("dbconnection.php");
    
    
    try {
        $db = new DatabaseClass();
      
        $data = file_get_contents('php://input');
        $getDeatilsUser = $db->Select("select *, SUBSTRING(address, 1 , 15) as addss from job order by created_at");
        header('Content-Type: application/json; charset=utf-8');
        if(count($getDeatilsUser) > 0) {
            $data = array();
            foreach ($getDeatilsUser as $key => $value) {
                
                $data["job_id"] = $value["job_id"];
                $data["job_tittle"] = $value["job_title"];
                $data["job_descriptions"] = $value["job_descriptions"];
                $data["min_salary"] = $value["min_salary"];
                $data["max_salary"] = $value["max_salary"];
                $data["logo"] = $value["job_image"];
                $data["address"] = $value["addss"];
                $data["company_name"] = $value["company_name"];
                $data["time_type"] = $value["time_type"];
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