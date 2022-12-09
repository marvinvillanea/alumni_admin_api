<?php 
include("dbconnection.php");
try {
    $db = new DatabaseClass();
    header('Content-Type: application/json; charset=utf-8');
    $db->Insert("INSERT INTO `error_logs` (descriptions) VALUES (?)", array(json_encode($_POST["str"])));
    $data = array();
    if(isset($_POST["str"])){
        parse_str($_POST["str"], $data);
        $db->Insert("INSERT INTO `error_logs` (descriptions) VALUES (?)", array(json_encode($data)));
        if(isset($data["token"])){
            $getDeatilsUser = $db->Select("SELECT user_id,CONCAT(pf.first_name, ', ' ,pf.last_name) AS fullname,u.email,pf.contact_no , descriptions, `image`
            from access_token 
            INNER JOIN users u USING(user_id) 
            INNER JOIN personal_info pf USING(user_id) 
            INNER JOIN course USING(course_id)
            where access_token  = ? ",array($data["token"]));
            if(count($getDeatilsUser) > 0) {
                $getSurveyAlumni = $db->Select("select * from survey_information where user_id = ? ", array($getDeatilsUser[0]["user_id"]));
                if(count($getSurveyAlumni) > 0) {
                    $response = [
                        "error" => "You're already done for the evaluation.."
                    ];
                    echo json_encode($response);
                } else {
                    $survey_info_id = $db->Insert("INSERT INTO `survey_information` (`user_id`,`age`,`sex`,`civil_status`,`office_address`,sy_id,course_id ) VALUES (?,?,?,?,?,?,?)", 
                    array($getDeatilsUser[0]["user_id"],$data["age"],$data["sex"],$data["civil_status"],$data["office_address"],$data["year_graduated"],$data["course_taken"]));


                    foreach ($data["bullet_survey"] as $value) {
                        $db->Insert("INSERT INTO `alumni_evulation` (`bullet_id`,`user_id`,`survey_info_id` ) VALUES (?,?,?)", array($value,$getDeatilsUser[0]["user_id"],$survey_info_id));
                    }
                    $response = [
                        "code" => "200",
                        "data" => "Sucessufuly Added"
                    ];
                    echo json_encode($response);
                }
                
            } 
        }
    }
    $response = [
        "error" => "Not Available"
    ];
    echo json_encode($response);

} catch(\Exception $e) {
    $response = [
        "error" => "NO data found". $e->getMessage()
    ];
    echo json_encode($response);
}

?>