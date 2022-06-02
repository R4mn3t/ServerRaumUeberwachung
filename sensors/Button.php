<!DOCTYPE html>
<html lang="ger-DE">
<head>
    <meta charset="UTF-8">
    <title>Button</title>
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
            <a href="../sensors/Button.php" class="active">
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
            <a href="../sensors/Temperature.php">
                <span class="links_name" style="margin-left: 30px">Temperature</span>
            </a>
        </li>
    </ul>
</div>

<?php

use Tinkerforge\AlreadyConnectedException;
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletRGBLEDButton;

?>

<section class="home-section">
    <nav>
    </nav>

    <div class="home-content">

        <div class="boxes">
            <div class="overview box">
                <div class="title">Button</div>
                <br>
                <table>
                    <tr>
                        <form method="post">
                            <td><label for="color">Color: </label></td>
                            <td><input type="number" min="0" max="255" name="color"></td>
                            <td><input type="submit"></td>
                        </form>
                    </tr>
                    <tr>
                        <?php
                        if (empty($_POST['color'])) {
                            echo "<td>" . "Last Input: " . "</td><td style='text-align: center'>" . 0 . "</td>";
                        } else {
                            $color = $_POST['color'];
                            echo "<td>" . "Last Input: " . "</td><td style='text-align: center'>" . $color . "</td>";
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
include_once('../Tinkerforge/BrickletRGBLEDButton.php');

include_once("../ipPort.php");
const UID = 'XBe'; // Change XYZ to the UID of your RGB LED Button Bricklet

// Callback function for button state changed callback
function cb_buttonStateChanged($state)
{
    if ($state == BrickletRGBLEDButton::BUTTON_STATE_PRESSED) {
        echo "State: Pressed\n";
    } elseif ($state == BrickletRGBLEDButton::BUTTON_STATE_RELEASED) {
        echo "State: Released\n";
    }
}

$ipcon = new IPConnection(); // Create IP connection
$rlb = null;

try {
    $ipcon->connect(HOST, PORT); // Connect to brickd
} catch (AlreadyConnectedException|Exception $e) {
}

// Check connection
if ($ipcon->getConnectionState() === IPConnection::ENUMERATION_TYPE_CONNECTED) {
    $rlb = new BrickletRGBLEDButton(UID, $ipcon); // Create device object
} else {
    echo "Device not connected!";
}
// Don't use device before ipcon is connected

// Register button state changed callback to function cb_buttonStateChanged
try {
    if (!is_null($rlb)) {
        $rlb->registerCallback(BrickletRGBLEDButton::CALLBACK_BUTTON_STATE_CHANGED,
            'cb_buttonStateChanged');
    }
} catch (Exception $e) {
}

echo "Press ctrl+c to exit\n";
$ipcon->dispatchCallbacks(-1); // Dispatch callbacks forever