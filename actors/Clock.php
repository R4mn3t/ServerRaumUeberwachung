<!DOCTYPE html>
<html lang="ger-DE">
<head>
    <meta charset="UTF-8">
    <title>Clock</title>
    <link rel="stylesheet" href="../style.css?<?php echo time(); ?>">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../library/KSTL%20Logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="sidebar">
    <div class="logo-details" style="margin-left: 30px">
        <a href="../index.php">
            <span class="logo_name">Serverraum Überwachung</span>
        </a>
    </div>
    <ul class="nav-links">
        <li>
            <a href="../sensors/Button.php">
                <span class="links_name" style="margin-left: 30px">Button</span>
            </a>
        </li>
        <li>
            <a href="../sensors/Brightness.php">
                <span class="links_name" style="margin-left: 30px">Brightness</span>
            </a>
        </li>
        <li>
            <a href="../actors/Clock.php" class="active">
                <span class="links_name" style="margin-left: 30px">Clock</span>
            </a>
        </li>
        <li>
            <a href="../actors/Display.php">
                <span class="links_name" style="margin-left: 30px">Display</span>
            </a>
        </li>
        <li>
            <a href="../sensors/Humidity.php">
                <span class="links_name" style="margin-left: 30px">Humidity</span>
            </a>
        </li>
        <li>
            <a href="../sensors/Motion.php">
                <span class="links_name" style="margin-left: 30px">Motion Detection</span>
            </a>
        </li>
        <li>
            <a href="../actors/Speaker.php">
                <span class="links_name" style="margin-left: 30px">Speaker</span>
            </a>
        </li>
        <li>
            <a href="../sensors/Temperature.php">
                <span class="links_name" style="margin-left: 30px">Temperature</span>
            </a>
        </li>
    </ul>
</div>

<?php

use Tinkerforge\AlreadyConnectedException;
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletSegmentDisplay4x7V2;
use Tinkerforge\NotConnectedException;

?>

<section class="home-section">
    <nav>
    </nav>

    <div class="home-content">

        <div class="boxes">
            <div class="overview box">
                <div class="title">Clock</div>
                <br>
                <table>
                    <tr>
                        <form method="post">
                            <td><label for="bright">Brightness: </label></td>
                            <td><input name="bright" type="number" min="0" max="7"></td>
                            <td><input type="submit"></td>
                        </form>
                    </tr>
                    <tr>
                        <?php
                        if (empty($_POST['bright'])) {
                            echo "<td>" . "Last Input: " . "</td><td style='text-align: center'>" . "0" . "</td>";
                        } else {
                            $bright = $_POST['bright'];
                            echo "<td>" . "Last Input: " . "</td><td style='text-align: center'>" . $bright . "</td>";
                        }
                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
</body>
</html>

<?php
include_once "../Tinkerforge/IPConnection.php";
include_once "../Tinkerforge/BrickletSegmentDisplay4x7V2.php";

include_once("../ipPort.php");
const UID = 'Tre'; // Change XYZ to the UID of your Segment Display 4x7 Bricklet 2.0

$ipcon = new IPConnection(); // Create IP connection
$sd = null;
$one = 0;
$two = 0;
$three = 0;
$four = 0;

try {
    $ipcon->connect(HOST, PORT); // Connect to brickd
} catch
(AlreadyConnectedException|Exception $e) {
}

// Check connection
if ($ipcon->getConnectionState() === IPConnection::ENUMERATION_TYPE_CONNECTED) {
    $sd = new BrickletSegmentDisplay4x7V2(UID, $ipcon); // Create device object
} else {
    echo "Device not connected!";
}

// Don't use device before ipcon is connected
if (!is_null($sd)) {
    $sd->setBrightness($bright); // Set brightness (max 7)
} else {
    echo "Device not connected!";
}

// Show "- 42" on the Display
if (!is_null($sd)) {
    $sd->setNumericValue(array($one, $two, $three, $four));
} else {
    echo "Device not connected!";
}
/*
-2: minus sign
-1: blank
0-9: 0-9
10: A
11: b
12: C
13: d
14: E
15: F
*/

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
try {
    $ipcon->disconnect();
} catch (NotConnectedException $e) {
}