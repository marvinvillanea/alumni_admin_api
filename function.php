<?php 

function updateJob($db) {
    extract($_POST);
    $data = $db->Select('select * from job
                where job_id ', array($job_id));
    if(count($data) > 0) {
        $folder = "images/company_logo/";
        $temp = explode(".", $_FILES["photo"]["name"]);
        $newfilename = $company_name.'_'.round(microtime(true)).'.'. end($temp);
        $db_path = $folder.$newfilename ;
        if ( is_uploaded_file( $_FILES['photo']['tmp_name'] ) ){
            if (move_uploaded_file($_FILES['photo']['tmp_name'],$db_path))
            {
                $job_image = getMyUrl().'/'.$db_path;
                $data = $db->Update("update job SET job_title = ?, job_descriptions = ?,course_id = ?,job_image = ?,min_salary = ?,max_salary = ?,address = ?, company_name = ?, time_type = ? WHERE job_id = ? ", array($job_title,$job_description,$course,$job_image,$min,$max,$address,$company_name,$type_time,$job_id));
            }
            
        } else {
            $data = $db->Update("update job SET job_title = ?, job_descriptions = ?,course_id = ?,min_salary = ?,max_salary = ?,address = ?, company_name = ?, time_type = ? WHERE job_id = ? ", array($job_title,$job_description,$course,$min,$max,$address,$company_name,$type_time,$job_id));
        }
      
    }         

}
function addJobsDescriptions($db){


    //Create an instance; passing `true` enables exceptions
    

    extract($_POST);

    $folder = "images/company_logo/";
    $temp = explode(".", $_FILES["photo"]["name"]);
    $newfilename = $company_name.'_'.round(microtime(true)).'.'. end($temp);
    $db_path = $folder.$newfilename ;
  
    if ( is_uploaded_file( $_FILES['photo']['tmp_name'] ) )
    {
       
        if (move_uploaded_file($_FILES['photo']['tmp_name'],$db_path))
        {
            try{
                $link = getMyUrl().'/'.$db_path;
                
                $db->Insert('insert into error_logs (descriptions) values (?) ', array(json_encode($_POST)));
                $db->Insert('insert into job (job_title,job_descriptions,course_id,min_salary,max_salary,address,company_name,time_type,job_image,`expired_date`,`start_date` ) values (?,?,?,?,?,?,?,?,?,?,?) ', array( ucwords($job_title),$job_description,$course,$min,$max,ucwords($address),ucwords($company_name), $type_time ,$link, $end_job, $start_job));
                
                $data = $db->Select('select * from personal_info
                inner join users using(user_id)
                where course_id = ? and status in (1) ', array($course));
                // if(moviderGetBalance($db)){
                    if(count($data) > 0) {
                        foreach ($data as $key => $value) {
                            $message = 'Hi '.ucfirst($value['first_name']). ', Good day! We have new job offer from '.ucwords($company_name).'. Job Title : '.ucwords($job_title).'. If you\'re willing to apply please visit to our app for more information. Thank you and have A nice day. From Alumni SPC ';
                            $details = [
                                "text" => $message,
                                "to" => $value["contact_no"],
                                "type" => "sms"
                            ];
                            $db->Insert("INSERT INTO `cron_job` (request_body) VALUES (?)", array(json_encode($details)));
                            $details = [
                                "type" => "email",
                                "email" => $value["email"],
                                "firstname" => $value['first_name'],
                                "message" => $message,
                                "setFRom" => 'SPC Alumni Administrator',
                                "subject" => 'New Job Offered'
                            ];
                            $db->Insert("INSERT INTO `cron_job` (request_body) VALUES (?)", array(json_encode($details)));
                            

                        }
                       
                    } else {
                       $response = [
                        "error" => "NO data found"
                       ];
                       echo json_encode($response);
                    }
                // }
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
    }
   
   
}

function addEvent($db){
    try{
        extract($_POST);

        $folder = "images/event_logo/";
        $temp = explode(".", $_FILES["photo"]["name"]);
        $newfilename = $event_name.'_'.round(microtime(true)).'.'. end($temp);
        $db_path = $folder.$newfilename ;
    
        if ( is_uploaded_file( $_FILES['photo']['tmp_name'] ) )
        {
        
            if (move_uploaded_file($_FILES['photo']['tmp_name'],$db_path))
            {
            
                $link = getMyUrl().'/'.$db_path;
                
                $db->Insert('insert into error_logs (descriptions) values (?) ', array(json_encode($_POST)));
                $db->Insert('insert into events (`event_name`,`when`,`where`,`desciptions`,`banner` ) values (?,?,?,?,?) ', array($event_name,$when,$where,$descriptions,$link));
                
                $data = $db->Select('select * from personal_info
                inner join users using(user_id)
                where status = 1 ');
                if(count($data) > 0) {
                    foreach ($data as $key => $value) {
                        $message = 'Hi '.ucfirst($value['first_name']). ', We would like to know you that we have upcoming event for '.$descriptions.'. We hope that you join and have fun. Thank you. SPC Alumni Administrator.';
                        $details = [
                            "text" => $message,
                            "to" => $value["contact_no"],
                            "type" => "sms"
                        ];
                        $db->Insert("INSERT INTO `cron_job` (request_body) VALUES (?)", array(json_encode($details)));
                        $details = [
                            "type" => "email",
                            "email" => $value["email"],
                            "firstname" => $value['first_name'],
                            "message" => $message,
                            "setFRom" => 'SPC Alumni Administrator',
                            "subject" => 'New Event Announcement!...'
                        ];
                        $db->Insert("INSERT INTO `cron_job` (request_body) VALUES (?)", array(json_encode($details)));

                    }
                    
                } else {
                    $response = [
                    "error" => "NO data found"
                    ];
                    echo json_encode($response);
                }
            }
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

function updateEvent($db){
    extract($_POST);
    $data = $db->Select('select * from events
                where event_id ', array($event_id));
    if(count($data) > 0) {
        $folder = "images/event_logo/";
        $temp = explode(".", $_FILES["photo"]["name"]);
        $newfilename = $event_name.'_'.round(microtime(true)).'.'. end($temp);
        $db_path = $folder.$newfilename ;
        if ( is_uploaded_file( $_FILES['photo']['tmp_name'] ) ){
            if (move_uploaded_file($_FILES['photo']['tmp_name'],$db_path))
            {
                try {
                    $job_image = getMyUrl().'/'.$db_path;
                    $db->Update("update `events` SET `event_name` = ?, `when` = ?,`where` = ?,`desciptions` = ?,`banner` = ? WHERE `event_id` = ? ", array($event_name,$when,$where,$desciptions,$job_image,$event_id));
                } catch (\Exception $e) {
                    echo $e->getMessage();
                }
            }
            
        } else {
            $db->Update("update `events` SET `event_name` = ?, `when` = ?,`where` = ?,`desciptions` = ? WHERE `event_id` = ? ", array($event_name,$when,$where,$desciptions,$event_id));
        }
      
    }         
}

function getMyUrl()
{
  $protocol = (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) ? 'https://' : 'http://';
  $server = $_SERVER['SERVER_NAME'];
  $port = $_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] : '';
//   return $protocol.$server.$port;
    return URL;
}


function savelog($db,$message){
    $db->Insert('insert into error_logs (descriptions) values (?) ', array(json_encode($message)));
}



function moviderGetBalance($con){
    try {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'https://api.movider.co/v1/balance', [
            'headers' => [
                'accept' => 'application/json',
                'content-type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => [
                'api_key' => '2H7GtWOeyWYMff0XzK7en5zEdy6',
                'api_secret' => 'l8KFeCstZZokPZFEW0n8ci8L21k9PQ',
            ]
        ]);
      
        $data = json_decode($response->getBody());
        savelog($con,$data);
        if(isset($data->amount)){
            return $data->amount > 0.100 ? true : false;
         }
        return false;
    } catch(\Exception $e) {
        $data = $e->getMessage();
        savelog($con,$data);
        return false;
    }
    
}


/*
$con = connection database
$data = array() details
*/ 
function moviderSentSMS($con, $details){

    try{
        $client = new \GuzzleHttp\Client();
        $form_params =[
            'api_key' => '2H7GtWOeyWYMff0XzK7en5zEdy6',
            'api_secret' => 'l8KFeCstZZokPZFEW0n8ci8L21k9PQ',
            'from' => 'ALumni SPC',
            'text' => $details["text"],
            'to' => '+63'.$details["to"]
        ];
        savelog($con,$form_params);
        $response = $client->request('POST', 'https://api.movider.co/v1/sms', [
            'headers' => [
                'accept' => 'application/json',
                'content-type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => $form_params
        ]);
        
        $data = json_decode($response->getBody());
        savelog($con,$data);
        if(isset($data->remaining_balance)){
            return true;
        }
        return false;

     } catch(\Exception $e) {
        $data = $e->getMessage();
        savelog($con,$data);
        return false;
    }
    
    
}

function addNewCourse($db){
    extract($_POST);
    $db->Insert('insert into course (`code`,`descriptions`) values (?,?) ', array($code, $descriptions));
}

function updateCourse($db){
    extract($_POST);
    $db->Update("update `course` SET `code` = ?, `descriptions` = ? WHERE `course_id` = ? ", array($code,$descriptions,$course_id));
}

function addNewSY($db){
    extract($_POST);
    $db->Insert('insert into `sy` (`sy`) values (?) ', array($sy));
}
function updateSY($db){
    extract($_POST);
    $db->Update("update `sy` SET `sy` = ? WHERE `sy_id` = ? ", array($sy ,$sy_id));
}

function addQuestion($db){
    extract($_POST);
    $db->Insert('insert into `survey` (`descriptions`) values (?) ', array($descriptions));
}

function addQuestionList($db){
    extract($_POST);
    $db->Insert('insert into `bullet_survey` (`descriptions`,`survey_id`) values (?, ?) ', array($descriptions, $survey_id));
}
?>