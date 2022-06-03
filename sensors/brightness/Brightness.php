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

    return "Illuminance: " . $illuminance / 100.0 . " lx\n";
} else {
    echo "Device not connected!";
}

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
try {
    $ipcon->disconnect();
} catch (NotConnectedException $e) {
}