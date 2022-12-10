<?php 
    header('Content-Type: application/json; charset=utf-8');

    include("dbconnection.php");

    require  '../vendor/autoload.php';
    require '../function.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

  
    // //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $db = new DatabaseClass();
    try {
       
        try {
            $client = new \GuzzleHttp\Client();
    
            $response = $client->request('GET', API_HOBOHOST, [
                'headers' => [
                    'accept' => 'application/json',
                    'content-type' => 'application/x-www-form-urlencoded',
                ]
            ]);
          
            $data = json_decode($response->getBody(),true);
            // var_dump($data["details"]); 
            foreach ($data["details"] as $key => $value) {
                if($value["data"]["type"] == "sms"){
                    // $details = [
                    //     "text" => $value["data"]["text"],
                    //     "to" => $value["data"]["to"]
                    // ];
                    // moviderSentSMS($db, $details);
                    echo 123;
                } else if($value["data"]["type"] == "email"){
                    try {
                       
                        //Server settings
                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = GOOGLE_HOST;                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = GOOGLE_EMAIL;                     //SMTP username
                        $mail->Password   = GOOGLE_PASSWORD;                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    
                        //Recipients
                        $mail->setFrom(GOOGLE_EMAIL, $value["data"]["setFRom"]);
                        $mail->addAddress($value["data"]["email"], ucfirst($value["data"]["firstname"]));     //Add a recipient
                    
                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = $value["data"]["subject"];
                        $mail->Body    = $value["data"]["message"];
                        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    
                        $mail->send();
                        if(!$mail->Send())
                        {
                            echo $mail->ErrorInfo;
                        } else {
                            echo 'Message has been sent';
                        }
                        echo 'Message has been sent';
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                   
                }
            }
        } catch(\Exception $e) {
            $data = $e->getMessage();
            echo $data;
            // savelog($con,$data);
            // return false;
        }
    } catch(\Exception $e) {
        echo "FAILED";
    }



?>