<?php require_once("../header.html"); ?>

    <h1>Button</h1>

<?php
require_once('Tinkerforge/IPConnection.php');
require_once('Tinkerforge/BrickletRGBLEDButton.php');

use Tinkerforge\IPConnection;
use Tinkerforge\BrickletRGBLEDButton;

require_once('ip.php');
const PORT = 4223;
const UID = 'XBe'; // Change XYZ to the UID of your RGB LED Button Bricklet

$ipcon = new IPConnection(); // Create IP connection
$rlb = new BrickletRGBLEDButton(UID, $ipcon); // Create device object

$ipcon->connect(HOST, PORT); // Connect to brickd
// Don't use device before ipcon is connected

// Set light blue color
$rlb->setColor(0, 170, 234);

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
$ipcon->disconnect();

require_once ("footer.html");