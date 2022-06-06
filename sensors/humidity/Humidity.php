<?php
session_start();

use Tinkerforge\AlreadyConnectedException;
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletHumidityV2;
use Tinkerforge\NotConnectedException;

include_once('../../Tinkerforge/IPConnection.php');
include_once('../../Tinkerforge/BrickletHumidityV2.php');

include_once("../../ipPort.php");
const UID = 'ViW'; // Change XYZ to the UID of your Humidity Bricklet 2.0

$ipcon = new IPConnection(); // Create IP connection
$h = null;
$humidity = null;

try {
    $ipcon->connect($_SESSION['ip'], $_SESSION['port']); // Connect to brickd
} catch (AlreadyConnectedException|Exception $e) {
}

// Check connection
if ($ipcon->getConnectionState() === IPConnection::ENUMERATION_TYPE_CONNECTED) {
    $h = new BrickletHumidityV2(UID, $ipcon); // Create device object
} else {
    echo "Device not connected!";
}
// Don't use device before ipcon is connected

// Get current humidity
if (!is_null($h)) {
    $humidity = $h->getHumidity();
    $_SESSION['humidity'] = $humidity / 100.0;
    echo "Humidity: " . $humidity / 100.0 . " %RH\n";
}

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
try {
    $ipcon->disconnect();
} catch (NotConnectedException $e) {
}