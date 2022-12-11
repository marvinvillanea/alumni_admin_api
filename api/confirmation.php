<?php 
   
    include("dbconnection.php");

    require  '../vendor/autoload.php';
    require '../function.php';
    $db = new DatabaseClass();
    try {
        $status = (isset($_POST["name"]) && $_POST["name"] == 'reject') ? 3 : 1;
        $data = $db->Update("update users SET status = ? WHERE user_id = ? ", array($status,$_POST["user_id"]));

        if(moviderGetBalance($db)){
            $sql = "select * from personal_info where user_id = ".$_POST["user_id"]." ";
            $getPersonalInfo = $db->Select($sql);
            if(count($getPersonalInfo) > 0) {
                $sql = "select * from users where user_id = ".$_POST["user_id"]." ";
                $usersss = $db->Select($sql);

                if($status == 1){
                    $message = "Hi ".ucfirst($getPersonalInfo[0]["first_name"]).". Good day. We would like you to know, your application was approved. Congratulations. From Alumni SPC Administrator.";
                }else {
                    $message = "Hi ".ucfirst($getPersonalInfo[0]["first_name"]).". Good day. We would like you to know, your application was rejected due to lack of requirements. Thank you for understanding. From Alumni SPC Administrator.";
                }
                $details = [
                    "text" => $message,
                    "to" => $getPersonalInfo[0]["contact_no"],
                    "type" => "sms"
                ];
                $db->Insert("INSERT INTO `cron_job` (request_body) VALUES (?)", array(json_encode($details)));
                $details = [
                    "type" => "email",
                    "email" => $usersss[0]['email'],
                    "firstname" => $getPersonalInfo[0]["first_name"],
                    "message" => $message,
                    "setFRom" => 'SPC Alumni Administrator',
                    "subject" => 'Verification Approval'
                ];
                $db->Insert("INSERT INTO `cron_job` (request_body) VALUES (?)", array(json_encode($details)));
            } else {
              echo "FAILED";
            }
        }
    } catch(\Exception $e) {
        echo "FAILED";
    }



?>