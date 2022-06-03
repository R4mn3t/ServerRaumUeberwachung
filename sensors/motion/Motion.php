<!DOCTYPE html>
<html lang="ger-DE">
<head>
    <meta charset="UTF-8">
    <title>Motion Detection</title>
    <link rel="stylesheet" href="../../style.css?<?php echo time(); ?>">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../../library/KSTL%20Logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="sidebar">
    <div class="logo-details" style="margin-left: 30px">
        <a href="../../index.php">
            <span class="logo_name">Serverraum Überwachung</span>
        </a>
    </div>
    <ul class="nav-links">
        <li>
            <a href="../button/Button.php">
                <span class="links_name" style="margin-left: 30px">Button</span>
            </a>
        </li>
        <li>
            <a href="../brightness/Brightness.php">
                <span class="links_name" style="margin-left: 30px">Brightness</span>
            </a>
        </li>
        <li>
            <a href="../../actors/clock/Clock.php">
                <span class="links_name" style="margin-left: 30px">Clock</span>
            </a>
        </li>
        <li>
            <a href="../../actors/display/Display.php">
                <span class="links_name" style="margin-left: 30px">Display</span>
            </a>
        </li>
        <li>
            <a href="../sensors/Humidity.php">
                <span class="links_name" style="margin-left: 30px">Humidity</span>
            </a>
        </li>
        <li>
            <a href="Motion.php" class="active">
                <span class="links_name" style="margin-left: 30px">Motion Detection</span>
            </a>
        </li>
        <li>
            <a href="../../actors/speaker/Speaker.php">
                <span class="links_name" style="margin-left: 30px">Speaker</span>
            </a>
        </li>
        <li>
            <a href="../temperature/Temperature.php">
                <span class="links_name" style="margin-left: 30px">Temperature</span>
            </a>
        </li>
    </ul>
</div>

<?php

use Tinkerforge\AlreadyConnectedException;
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletMotionDetectorV2;
use Tinkerforge\NotConnectedException;

?>

<section class="home-section">
    <nav>
    </nav>

    <div class="home-content">

        <div class="boxes">
            <div class="overview box">
                <div class="title">Motion Detection</div>
                <br>
                <p>Light Setting:</p>
                <table>
                    <form method="post">
                        <tr>
                            <td><label for="top-left">Top Left: </label>
                                <input name="top-left" type="number" min="0" max="255"></td>
                        </tr>
                        <tr>
                            <td><label for="top-left">Top Right: </label>
                                <input name="top-right" type="number" min="0" max="255"></td>
                        </tr>
                        <tr>
                            <td><label for="top-left">Bottom: </label>
                                <input name="bottom" type="number" min="0" max="255"></td>
                        </tr>
                        <tr>
                            <td><input type="submit"></td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>
</section>
</body>
</html>

<?php
include_once('../Tinkerforge/IPConnection.php');
include_once('../Tinkerforge/BrickletMotionDetectorV2.php');

include_once("../ipPort.php");
const UID = 'ML4'; // Change XYZ to the UID of your Motion Detector Bricklet 2.0

// Callback function for motion detected callback
function cb_motionDetected()
{
    echo "Motion Detected\n";
}

// Callback function for detection cycle ended callback
function cb_detectionCycleEnded()
{
    echo "Detection Cycle Ended (next detection possible in ~2 seconds)\n";
}

$ipcon = new IPConnection(); // Create IP connection
$md = null;

try {
    $ipcon->connect(HOST, PORT); // Connect to brickd
} catch (AlreadyConnectedException|Exception $e) {
}

// Check connection
if ($ipcon->getConnectionState() === IPConnection::ENUMERATION_TYPE_CONNECTED) {
    $md = new BrickletMotionDetectorV2(UID, $ipcon); // Create device object
} else {
    echo "Device not connected!";
}
// Don't use device before ipcon is connected

// Register motion detected callback to function cb_motionDetected
try {
    if (!is_null($md)) {
        $md->registerCallback(BrickletMotionDetectorV2::CALLBACK_MOTION_DETECTED,
            'cb_motionDetected');
    }
} catch (Exception $e) {
}

// Register detection cycle ended callback to function cb_detectionCycleEnded
try {
    if (!is_null($md)) {
        $md->registerCallback(BrickletMotionDetectorV2::CALLBACK_DETECTION_CYCLE_ENDED,
            'cb_detectionCycleEnded');
    }
} catch (Exception $e) {
}

// Turn blue backlight LEDs on (maximum brightness)
if (!is_null($md)) {
    $md->setIndicator($_POST['top-left'], $_POST['top-right'], $_POST['bottom']);
}

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
try {
    $ipcon->disconnect();
} catch (NotConnectedException $e) {
}

echo "Press ctrl+c to exit\n";
$ipcon->dispatchCallbacks(-1); // Dispatch callbacks forever