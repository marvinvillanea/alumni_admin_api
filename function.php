<?php 

function addJobsDescriptions($db){
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
                $db->Insert('insert into job (job_title,job_descriptions,course_id,min_salary,max_salary,address,company_name,time_type,job_image ) values (?,?,?,?,?,?,?,?,?) ', array( ucwords($job_title),$job_description,$course,$min,$max,ucwords($address),ucwords($company_name), $type_time ,$link));
                
                $data = $db->Select('select * from personal_info where course_id = ? ', array($course));
                if(moviderGetBalance($db)){
                    if(count($data) > 0) {
                        foreach ($data as $key => $value) {
                            $message = 'Hi '.ucfirst($value['first_name']). ', Good day! We have new job offer from '.ucwords($company_name).'. Job Title : '.ucwords($job_title).'. If you\'re willing to apply please visit to our app for more information. Thank you and have A nice day. From Alumni SPC ';
                            $details = [
                                "text" => $message,
                                "to" => $value["contact_no"]
                            ];
                            // echo "<pre>";
                            //     var_dump($details);
                            // echo "</pre>";
                            moviderSentSMS($db, $details);

                        }
                       
                    } else {
                       $response = [
                        "error" => "NO data found"
                       ];
                       echo json_encode($response);
                    }
                }
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
                    
            
            }
        }
    }catch(Exception $e){
        echo $e->getMessage();
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
                'api_secret' => '',
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
            'api_secret' => '',
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


?>