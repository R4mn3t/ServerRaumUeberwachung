<!DOCTYPE html>
<html lang="ger-DE">
<head>
    <meta charset="UTF-8">
    <title>Display</title>
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
            <a href="../actors/Display.php" class="active">
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
use Tinkerforge\BrickletEPaper296x128;

?>

<section class="home-section">
    <nav>
    </nav>

    <div class="home-content">

        <div class="boxes">
            <div class="overview box">
                <div class="title">Display</div>
                <br>
                <form action="#">
                    <input type="file" id="paper-image" name="image-name">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>

<?php
if (!extension_loaded('gd')) {
    echo "Required gd extension is not available\n";
    exit;
}

include_once('../Tinkerforge/IPConnection.php');
include_once('../Tinkerforge/BrickletEPaper296x128.php');

include_once("../ipPort.php");
const UID = 'XGL'; // Change XYZ to the UID of your E-Paper 296x128 Bricklet
const WIDTH = 296; // Columns
const HEIGHT = 128; // Rows

// Convert GD Image to matching color bool array
function boolArrayFromImage($image, $r, $g, $b): array
{
    $pixels = array();

    // Convert image pixels into 8bit pages
    for ($row = 0; $row < HEIGHT; $row++) {
        for ($column = 0; $column < WIDTH; $column++) {
            $index = imagecolorat($image, $column, $row);
            $color = imagecolorsforindex($image, $index);
            $pixels[$row * WIDTH + $column] = (($color['red'] == $r) && ($color['green'] == $g) && ($color['blue'] == $b));
        }
    }

    return $pixels;
}

$ipcon = new IPConnection(); // Create IP connection
$epaper = null;

try {
    $ipcon->connect(HOST, PORT); // Connect to brickd
} catch (AlreadyConnectedException|Exception $e) {
}

// Check connection
if ($ipcon->getConnectionState() === IPConnection::ENUMERATION_TYPE_CONNECTED) {
    $epaper = new BrickletEPaper296x128(UID, $ipcon); // Create device object
} else {
    echo "Device not connected!";
}
// Don't use device before ipcon is connected

// Download example image here:
// https://raw.githubusercontent.com/Tinkerforge/e-paper-296x128-bricklet/master/software/examples/tf_red.png
$image = imagecreatefrompng('tf_red.png');

if (!is_null($epaper)) {
// Get black/white pixels from image and write them to the Bricklet buffer
    $pixelsBW = boolArrayFromImage($image, 0xFF, 0xFF, 0xFF);
    $epaper->writeBlackWhite(0, 0, WIDTH - 1, HEIGHT - 1, $pixelsBW);

// Get red pixels from image and write them to the Bricklet buffer
    $pixelsRed = boolArrayFromImage($image, 0xFF, 0, 0);
    $epaper->writeColor(0, 0, WIDTH - 1, HEIGHT - 1, $pixelsRed);
    // Draw buffered values to the display
    $epaper->draw();
} else {
    echo "Device not connected!";
}

echo "Press ctrl+c to exit\n";