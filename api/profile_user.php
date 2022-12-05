<?php 
   
    include("dbconnection.php");
    
    
    try {
        $db = new DatabaseClass();
      
        // // Converts it into a PHP object
        // $data = json_encode($json);
        // //add your check here that is $data["username"] as bellow
        // // isset($data["username"])
        // return $data;
        header('Content-Type: application/json; charset=utf-8');
        if(isset($_POST)){
            $data = file_get_contents('php://input');
            $data = json_decode($data);
            $db->Insert("INSERT INTO `error_logs` (descriptions) VALUES (?)", array(json_encode($data)));
            if(isset($data->token)){
                // $data = array();
                $getDeatilsUser = $db->Select("SELECT user_id,CONCAT(pf.first_name, ', ' ,pf.last_name) AS fullname,u.email,pf.contact_no , descriptions, `image`
                from access_token 
                INNER JOIN users u USING(user_id) 
                INNER JOIN personal_info pf USING(user_id) 
                INNER JOIN course USING(course_id)
                where access_token  = ? ",array($data->token));
                if(count($getDeatilsUser) > 0) {
                        $response = array(
                            "code" => "200",
                            "details" => [
                                "user_id" => $getDeatilsUser[0]["user_id"],
                                "full_name" => ucwords($getDeatilsUser[0]["fullname"]),
                                "email" => $getDeatilsUser[0]["email"],
                                "contact_no" => $getDeatilsUser[0]["contact_no"],
                                "course" => $getDeatilsUser[0]["descriptions"],
                                "image" => $getDeatilsUser[0]["image"]
                            ],
                        );
                        echo json_encode($response);
                    
                }else {
                    $response = [
                        "error" => "NO data found"
                    ];
                    echo json_encode($response);
                }
            }else {
                $response = [
                    "error" => "NO data found"
                ];
                echo json_encode($response);
            }
        } else {
            $response = [
                "error" => "NO data found"
            ];
            echo json_encode($response);
        }
    } catch(\Exception $e) {
        $response = [
            "error" => "NO data found". $e->getMessage()
        ];
        echo json_encode($response);
    }



?>