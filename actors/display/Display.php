<?php
session_start();

use Tinkerforge\AlreadyConnectedException;
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletEPaper296x128;

if (!extension_loaded('gd')) {
    echo "Required gd extension is not available\n";
    exit;
}

include_once('../../Tinkerforge/IPConnection.php');
include_once('../../Tinkerforge/BrickletEPaper296x128.php');

include_once("../../ipPort.php");
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
    $ipcon->connect($_SESSION['ip'], $_SESSION['port']); // Connect to brickd
} catch (AlreadyConnectedException|Exception $e) {
}

// Check connection
if ($ipcon->getConnectionState() === IPConnection::ENUMERATION_TYPE_CONNECTED) {
    $epaper = new BrickletEPaper296x128(UID, $ipcon); // Create device object
} else {
    echo "Device not connected!";
}
// Don't use device before ipcon is connected

$dir = "uploads/";
$fileName = $dir . basename($_FILES['paper-image']['name']);
$uploadCheck = null;
$fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

// Check if file is image
if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES['paper-image']['name']);

    if ($check) {
        echo "<script>window.alert('Image accepted.');</script>";
        $uploadCheck = true;
    } else {
        echo "<script>window.alert('File is not an image!');</script>";
        $uploadCheck = false;
    }
}

// Type check
if ($fileType !== 'jpg' && $fileType !== 'png' && $fileType !== 'jpeg') {
    echo "<script>window.alert('Only JPG, JPEG and PNG files are allowed!')</script>";
    $uploadCheck = false;
}

// Upload check
if (!$uploadCheck) {
    echo "<script>window.alert('Ooops, image was not uploaded.')</script>";
} else {
    if (move_uploaded_file($_FILES['paper-image']['tmp_name'], $fileName)) {
        echo "<script>window.alert('The image was uploaded.')</script>";
    } else {
        echo "<script>window.alert('There was an error uploading your file')</script>";
    }
}
$image = imagecreatefrompng($fileName);

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