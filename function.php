<?php 

function addJobsDescriptions($db){
    echo "<pre>";
        var_dump($_POST);
    echo "</pre>";
   
    extract($_POST);
    try{
        $db->Insert('insert into error_logs (descriptions) values (?) ', array(json_encode($_POST)));
        $db->Insert('insert into job (job_title,job_descriptions,course_id,min_salary,max_salary,address,company_name,time_type ) values (?,?,?,?,?,?,?,?) ', array( ucwords($job_title),$job_description,$course,$min,$max,ucwords($address),ucwords($company_name), $type_time ));
        
    }catch(Exception $e){
        echo $e->getMessage();
    }
   
}

function getMyUrl()
{
  $protocol = (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) ? 'https://' : 'http://';
  $server = $_SERVER['SERVER_NAME'];
  $port = $_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] : '';
  return $protocol.$server.$port;
}

?>