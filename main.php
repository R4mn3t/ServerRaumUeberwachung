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

    if (!is_null($_SESSION['temperature'])) {
        $temperature = $_SESSION['temperature'];
    }

// Display Temperature on Clock
    switch ($temperature) {
        case (50):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 5;
            $_SESSION['four'] = 0;
            break;
        case (49):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 4;
            $_SESSION['four'] = 9;
            break;
        case (48):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 4;
            $_SESSION['four'] = 8;
            break;
        case (47):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 4;
            $_SESSION['four'] = 7;
            break;
        case (46):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 4;
            $_SESSION['four'] = 6;
            break;
        case (45):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 4;
            $_SESSION['four'] = 5;
            break;
        case (44):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 4;
            $_SESSION['four'] = 4;
            break;
        case (43):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 4;
            $_SESSION['four'] = 3;
            break;
        case (42):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 4;
            $_SESSION['four'] = 2;
            break;
        case (41):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 4;
            $_SESSION['four'] = 1;
            break;
        case (40):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 4;
            $_SESSION['four'] = 0;
            break;
        case (39):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 3;
            $_SESSION['four'] = 9;
            break;
        case (38):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 3;
            $_SESSION['four'] = 8;
            break;
        case (37):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 3;
            $_SESSION['four'] = 7;
            break;
        case (36):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 3;
            $_SESSION['four'] = 6;
            break;
        case (35):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 3;
            $_SESSION['four'] = 5;
            break;
        case (34):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 3;
            $_SESSION['four'] = 4;
            break;
        case (33):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 3;
            $_SESSION['four'] = 3;
            break;
        case (32):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 3;
            $_SESSION['four'] = 2;
            break;
        case (31):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 3;
            $_SESSION['four'] = 1;
            break;
        case (30):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 3;
            $_SESSION['four'] = 0;
            break;
        case (29):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 2;
            $_SESSION['four'] = 9;
            break;
        case (28):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 2;
            $_SESSION['four'] = 8;
            break;
        case (27):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 2;
            $_SESSION['four'] = 7;
            break;
        case (26):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 2;
            $_SESSION['four'] = 6;
            break;
        case (25):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 2;
            $_SESSION['four'] = 5;
            break;
        case (24):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 2;
            $_SESSION['four'] = 4;
            break;
        case (23):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 2;
            $_SESSION['four'] = 3;
            break;
        case (22):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 2;
            $_SESSION['four'] = 2;
            break;
        case (21):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 2;
            $_SESSION['four'] = 1;
            break;
        case (20):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 2;
            $_SESSION['four'] = 0;
            break;
        case (19):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 1;
            $_SESSION['four'] = 9;
            break;
        case (18):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 1;
            $_SESSION['four'] = 8;
            break;
        case (17):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 1;
            $_SESSION['four'] = 7;
            break;
        case (16):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 1;
            $_SESSION['four'] = 6;
            break;
        case (15):
            $_SESSION['one'] = -1;
            $_SESSION['two'] = -1;
            $_SESSION['three'] = 1;
            $_SESSION['four'] = 5;
            break;
    }

    // Send Warning Mail for temperature
    if ($temperature >= 30) {
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Temperaturwarnung!";
        $mail->Body = "Achtung! <br> Die Temperatur liegt bei über <b>30°C!</b>";
        $mail->AltBody = "Achtung! Die Temperatur liegt bei über 30°C!";

        $mail->send();
        echo 'Message has been sent';
    }

    // Set Alarm for temperature
    while ($temperature > 40) {
        $_SESSION['tempCheck'] = true;
        $_SESSION['red'] = 255;
        $_SESSION['green'] = 0;
        $_SESSION['blue'] = 0;

        if ($temperature <= 39) {
            $_SESSION['tempCheck'] = false;
            break;
        }
    }

    // Check if Button was pressed - set Alarm off
    if ($_SESSION['buttonState'] === 'pressed') {
        $_SESSION['tempCheck'] = false;
    }

    $humidity = null;

    if (!is_null($_SESSION['humidity'])) {
        $humidity = $_SESSION['humidity'];
    }

    // Send Warning Mail for humidity
    if ($humidity >= 50) {
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Feuchtigkeitswarnung!";
        $mail->Body = "Achtung! <br> Die Luftfeuchtigkeit liegt bei über <b>50 %RH!</b>";
        $mail->AltBody = "Achtung! Die Luftfeuchtigkeit liegt bei über 50 %RH!";

        $mail->send();
        echo 'Message has been sent';
    }

    // Set Alarm for humidity
    while ($humidity > 60) {
        $_SESSION['humCheck'] = true;
        $_SESSION['red'] = 255;
        $_SESSION['green'] = 0;
        $_SESSION['blue'] = 0;

        if ($humidity <= 59) {
            $_SESSION['humCheck'] = false;
            break;
        }
    }

    // Check if Button was pressed - set Alarm off
    if ($_SESSION['buttonState'] === 'pressed') {
        $_SESSION['humCheck'] = false;
    }

    // Send warning mail for motion detection
    if ($_SESSION['motion'] === true) {
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Bewegungswarnung!";
        $mail->Body = "Achtung! <br> Unbefugter Zutritt im Serverraum!";
        $mail->AltBody = "Achtung! Unbefugter Zutritt im Serverraum!";

        $mail->send();
        echo 'Message has been sent';
    }

    // Send warning mail for brightness
    if ($_SESSION['illuminance'] > 300) {
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Helligkeitswarnung!";
        $mail->Body = "Achtung! <br> Womöglich unbefugter Zutritt im Serverraum!";
        $mail->AltBody = "Achtung! Womöglich unbefugter Zutritt im Serverraum!";

        $mail->send();
        echo 'Message has been sent';
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: $mail->ErrorInfo";
}