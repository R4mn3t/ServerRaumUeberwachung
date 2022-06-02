<!DOCTYPE html>
<html lang="ger-DE">
<head>
    <meta charset="UTF-8">
    <title>Brightness</title>
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
            <a href="../sensors/Brightness.php" class="active">
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
use Tinkerforge\BrickletAmbientLightV3;
use Tinkerforge\NotConnectedException;

require_once('../Tinkerforge/IPConnection.php');
require_once('../Tinkerforge/BrickletAmbientLightV3.php');

include_once("../ipPort.php");
const UID = 'Pdw'; // Change XYZ to the UID of your Ambient Light Bricklet 3.0

$ipcon = new IPConnection(); // Create IP connection
$al = null;
$illuminance = null;

try {
    $ipcon->connect(HOST, PORT); // Connect to brickd
} catch (AlreadyConnectedException|Exception $e) {
}

// Check connection
if ($ipcon->getConnectionState() === IPConnection::ENUMERATION_TYPE_CONNECTED) {
    $al = new BrickletAmbientLightV3(UID, $ipcon); // Create device object
} else {
    echo "Device not connected!";
}
// Don't use device before ipcon is connected

// Get current Illuminance
if (!is_null($al)) {
    $illuminance = $al->getIlluminance();
    echo "Illuminance: " . $illuminance / 100.0 . " lx\n";
} else {
    echo "Device not connected!";
}
?>

<section class="home-section">
    <nav>
    </nav>

    <div class="home-content">

        <div class="boxes">
            <div class="overview box">
                <div class="title">Brightness</div>
                <br>
                <p>Current Brightness: <?php echo $illuminance / 100.0 . " lx"; ?></>
            </div>
        </div>
    </div>
</section>
</body>
</html>

<?php
echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
try {
    $ipcon->disconnect();
} catch (NotConnectedException $e) {
}
?>

