<?php
session_start();

use Tinkerforge\AlreadyConnectedException;
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletPiezoSpeakerV2;
use Tinkerforge\NotConnectedException;

include_once('../Tinkerforge/IPConnection.php');
include_once('../Tinkerforge/BrickletPiezoSpeakerV2.php');

include_once("../ipPort.php");
const UID = 'R7M'; // Change XYZ to the UID of your Piezo Speaker Bricklet 2.0

$ipcon = new IPConnection(); // Create IP connection
$ps = null;

try {
    $ipcon->connect(HOST, PORT); // Connect to brickd
} catch (AlreadyConnectedException|Exception $e) {
}

// Check connection
if ($ipcon->getConnectionState() === IPConnection::ENUMERATION_TYPE_CONNECTED) {
    $ps = new BrickletPiezoSpeakerV2(UID, $ipcon); // Create device object
} else {
    echo "Device not connected!";
}
// Don't use device before ipcon is connected

// 10 seconds of loud annoying fast alarm
if (!is_null($ps)) {
    $ps->setAlarm(800, 2000, 10, 1, $_SESSION['volume'], 10000);
} else {
    echo "Device not connected!";
}

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
try {
    $ipcon->disconnect();
} catch (NotConnectedException $e) {
}