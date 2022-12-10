<?php 
   
    include("dbconnection.php");

    require  '../vendor/autoload.php';
    require '../function.php';

    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;
    // use PHPMailer\PHPMailer\Exception;

  
    // //Create an instance; passing `true` enables exceptions
    // $mail = new PHPMailer(true);
    $db = new DatabaseClass();
    try {
       
      
        // // Converts it into a PHP object
        // $data = json_encode($json);
        // //add your check here that is $data["username"] as bellow
        // // isset($data["username"])
        // return $data;
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
                    "firstname" => $getPersonalInfo[0]["contact_no"],
                    "message" => $message,
                    "setFRom" => 'SPC Alumni Administrator',
                    "subject" => 'Verification Approval'
                ];
                $db->Insert("INSERT INTO `cron_job` (request_body) VALUES (?)", array(json_encode($details)));
                // try {
                //     $sql = "select * from users where user_id = ".$_POST["user_id"]." ";
                //     $usersss = $db->Select($sql);
                //     //Server settings
                //     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                //     $mail->isSMTP();                                            //Send using SMTP
                //     $mail->Host       = GOOGLE_HOST;                     //Set the SMTP server to send through
                //     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                //     $mail->Username   = GOOGLE_EMAIL;                     //SMTP username
                //     $mail->Password   = GOOGLE_PASSWORD;                               //SMTP password
                //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                //     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                
                //     //Recipients
                //     $mail->setFrom(GOOGLE_EMAIL, 'SPC Alumni Administrator');
                //     $mail->addAddress($usersss[0]['email'], ucfirst($getPersonalInfo[0]["first_name"]));     //Add a recipient
                //     // $mail->addAddress('ellen@example.com');               //Name is optional
                //     // $mail->addReplyTo('info@example.com', 'Information');
                //     // $mail->addCC('cc@example.com');
                //     // $mail->addBCC('bcc@example.com');
                
                //     //Attachments
                //     // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                //     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                
                //     //Content
                //     $mail->isHTML(true);                                  //Set email format to HTML
                //     $mail->Subject = 'Verification Approval';
                //     $mail->Body    = $message;
                //     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                
                //     $mail->send();
                //     echo 'Message has been sent';
                // } catch (Exception $e) {
                //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                // }
                // $details = [
                //     "text" => $message,
                //     "to" => $getPersonalInfo[0]["contact_no"]
                // ];
                // moviderSentSMS($db, $details);
            } else {
              echo "FAILED";
            }
        }
    } catch(\Exception $e) {
        echo "FAILED";
    }



?>