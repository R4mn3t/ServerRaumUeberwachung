<!DOCTYPE html>
<html lang="ger-DE">
<head>
    <meta charset="UTF-8">
    <title>Temperature</title>
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
            <a href="../actors/Speaker.php">
                <span class="links_name" style="margin-left: 30px">Speaker</span>
            </a>
        </li>
        <li>
            <a href="../sensors/Temperature.php" class="active">
                <span class="links_name" style="margin-left: 30px">Temperature</span>
            </a>
        </li>
    </ul>
</div>

<?php

use Tinkerforge\AlreadyConnectedException;
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletPTCV2;

include_once('../Tinkerforge/IPConnection.php');
include_once('../Tinkerforge/BrickletPTCV2.php');

include_once("../ipPort.php");
const UID = 'Wcg'; // Change XYZ to the UID of your PTC Bricklet 2.0

echo "<title>Temperature</title>";

// Callback function for temperature callback
function cb_temperature($temperature)
{
    echo "Temperature: " . $temperature / 100.0 . " °C\n";
}

$ipcon = new IPConnection(); // Create IP connection
$ptc = null;
$temperature = null;

try {
    $ipcon->connect(HOST, PORT); // Connect to brickd
} catch (AlreadyConnectedException|Exception $e) {
}

// Check connection
if ($ipcon->getConnectionState() === IPConnection::ENUMERATION_TYPE_CONNECTED) {
    $ptc = new BrickletPTCV2(UID, $ipcon); // Create device object
} else {
    echo "Device not connected!";
}
// Don't use device before ipcon is connected

// Register temperature callback to function cb_temperature
try {
    if (!is_null($ptc)) {
        $ptc->registerCallback(BrickletPTCV2::CALLBACK_TEMPERATURE, 'cb_temperature');
    }
} catch (Exception $e) {
}

// Set period for temperature callback to 1s (1000ms) without a threshold
if (!is_null($ptc)) {
    $ptc->setTemperatureCallbackConfiguration(1000, FALSE, 'x', 0, 0);
} else {
    echo "Device not connected!";
}

if (!is_null($ptc)) {
    $temperature = $ptc->getTemperature();
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
                <div class="title">Temperature</div>
                <br>
                <p>Current Temperature: </p>
                <p>
                    <?php
                    echo $temperature;
                    ?>
                </p>
            </div>
        </div>
    </div>
</section>
</body>
</html>

<?php
echo "Press ctrl+c to exit\n";
$ipcon->dispatchCallbacks(-1); // Dispatch callbacks forever