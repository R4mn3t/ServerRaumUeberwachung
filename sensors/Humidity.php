<?php require_once("../header.html"); ?>

    <h1>Humidity</h1>

<?php
require_once('Tinkerforge/IPConnection.php');
require_once('Tinkerforge/BrickletHumidityV2.php');

use Tinkerforge\IPConnection;
use Tinkerforge\BrickletHumidityV2;

require_once("ip.php");
const PORT = 4223;
const UID = 'ViW'; // Change XYZ to the UID of your Humidity Bricklet 2.0

$ipcon = new IPConnection(); // Create IP connection
$h = new BrickletHumidityV2(UID, $ipcon); // Create device object

$ipcon->connect(HOST, PORT); // Connect to brickd
// Don't use device before ipcon is connected

// Get current humidity
$humidity = $h->getHumidity();
echo "Humidity: " . $humidity/100.0 . " %RH\n";

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
$ipcon->disconnect();