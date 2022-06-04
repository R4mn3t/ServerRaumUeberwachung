<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'securesmtp.t-online.de';               //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'cpsprojektkstl@t-online.de';           //SMTP username
    $mail->Password = 'serverKSTL2022!';                       //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('cpsprojektkstl@t-online.de', 'Mailer');
    $mail->addAddress('knystockmarten@gmail.com', 'Marten Knystock');     //Add a recipient

    $temperature = null;

//if (!empty($_SESSION['temperature'])) {
//    $temperature = $_SESSION['temperature'];
//}
//
//switch ($temperature) {
//    case (40):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 4;
//        $_SESSION['four'] = 0;
//        break;
//    case (39):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 3;
//        $_SESSION['four'] = 9;
//        break;
//    case (38):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 3;
//        $_SESSION['four'] = 8;
//        break;
//    case (37):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 3;
//        $_SESSION['four'] = 7;
//        break;
//    case (36):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 3;
//        $_SESSION['four'] = 6;
//        break;
//    case (35):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 3;
//        $_SESSION['four'] = 5;
//        break;
//    case (34):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 3;
//        $_SESSION['four'] = 4;
//        break;
//    case (33):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 3;
//        $_SESSION['four'] = 3;
//        break;
//    case (32):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 3;
//        $_SESSION['four'] = 2;
//        break;
//    case (31):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 3;
//        $_SESSION['four'] = 1;
//        break;
//    case (30):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 3;
//        $_SESSION['four'] = 0;
//        break;
//    case (29):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 2;
//        $_SESSION['four'] = 9;
//        break;
//    case (28):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 2;
//        $_SESSION['four'] = 8;
//        break;
//    case (27):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 2;
//        $_SESSION['four'] = 7;
//        break;
//    case (26):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 2;
//        $_SESSION['four'] = 6;
//        break;
//    case (25):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 2;
//        $_SESSION['four'] = 5;
//        break;
//    case (24):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 2;
//        $_SESSION['four'] = 4;
//        break;
//    case (23):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 2;
//        $_SESSION['four'] = 3;
//        break;
//    case (22):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 2;
//        $_SESSION['four'] = 2;
//        break;
//    case (21):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 2;
//        $_SESSION['four'] = 1;
//        break;
//    case (20):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 2;
//        $_SESSION['four'] = 0;
//        break;
//    case (19):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 1;
//        $_SESSION['four'] = 9;
//        break;
//    case (18):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 1;
//        $_SESSION['four'] = 8;
//        break;
//    case (17):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 1;
//        $_SESSION['four'] = 7;
//        break;
//    case (16):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 1;
//        $_SESSION['four'] = 6;
//        break;
//    case (15):
//        $_SESSION['one'] = -1;
//        $_SESSION['two'] = -1;
//        $_SESSION['three'] = 1;
//        $_SESSION['four'] = 5;
//        break;
//}

    if ($temperature >= 30) {
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Temperaturwarnung!";
        $mail->Body = "Achtung! <br> Die Temperatur liegt bei über 30°C!";
        $mail->AltBody = "Achtung! Die Temperatur liegt bei über 30°C!";

        $mail->send();
        echo 'Message has been sent';


    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: $mail->ErrorInfo";
}



//Aufgaben

//Automatische Mail bei kritischen Ereignissen erstellen
