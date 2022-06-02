<!DOCTYPE html>
<html lang="ger-DE">
<head>
    <meta charset="UTF-8">
    <title>Speaker</title>
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
            <a href="../actors/Clock.php">
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
            <a href="../actors/Speaker.php" class="active">
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
use Tinkerforge\BrickletPiezoSpeakerV2;
use Tinkerforge\NotConnectedException;

?>

<section class="home-section">
    <nav>
    </nav>

    <div class="home-content">

        <div class="boxes">
            <div class="overview box">
                <div class="title">Speaker</div>
                <br>
                <table>
                    <tr>
                        <form method="post">
                            <td><label for="volume">Volume: </label></td>
                            <td><input name="volume" type="number" min="1" max="10"></td>
                            <td><input type="submit"></td>
                        </form>
                    </tr>
                    <tr>
                        <?php
                        if (empty($_POST['volume'])) {
                            echo "<td>" . "Last Input: " . "</td><td style='text-align: center'>" . 1 . "</td>";
                        } else {
                            $volume = $_POST['volume'];
                            echo "<td>" . "Last Input: " . "</td><td style='text-align: center'>" . $volume . "</td>";
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
include_once('../Tinkerforge/IPConnection.php');
include_once('../Tinkerforge/BrickletPiezoSpeakerV2.php');

include_once("../ipPort.php");
const UID = 'R7M'; // Change XYZ to the UID of your Piezo Speaker Bricklet 2.0

$ipcon = new IPConnection(); // Create IP connection
$ps = null;

try {
    $ipcon->connect(HOST, PORT); // Connect to brickd
} catch (AlreadyConnectedException|Exception $e) {
}

// Check connection
if ($ipcon->getConnectionState() === IPConnection::ENUMERATION_TYPE_CONNECTED) {
    $ps = new BrickletPiezoSpeakerV2(UID, $ipcon); // Create device object
} else {
    echo "Device not connected!";
}
// Don't use device before ipcon is connected

// 10 seconds of loud annoying fast alarm
if (!is_null($ps)) {
    $ps->setAlarm(800, 2000, 10, 1, $volume, 10000);
} else {
    echo "Device not connected!";
}

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
try {
    $ipcon->disconnect();
} catch (NotConnectedException $e) {
}