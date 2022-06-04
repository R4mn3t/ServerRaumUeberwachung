<?php
session_start();

use Tinkerforge\AlreadyConnectedException;
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletSegmentDisplay4x7V2;
use Tinkerforge\NotConnectedException;

include_once "../../Tinkerforge/IPConnection.php";
include_once "../../Tinkerforge/BrickletSegmentDisplay4x7V2.php";

include_once("../../ipPort.php");
const UID = 'Tre'; // Change XYZ to the UID of your Segment Display 4x7 Bricklet 2.0

$ipcon = new IPConnection(); // Create IP connection
$sd = null;

try {
    $ipcon->connect($_SESSION['ip'], $_SESSION['port']); // Connect to brickd
} catch
(AlreadyConnectedException|Exception $e) {
}

// Check connection
if ($ipcon->getConnectionState() === IPConnection::ENUMERATION_TYPE_CONNECTED) {
    $sd = new BrickletSegmentDisplay4x7V2(UID, $ipcon); // Create device object
} else {
    echo "Device not connected!";
}

// Don't use device before ipcon is connected
if (!is_null($sd)) {
    $sd->setBrightness($_SESSION['bright']); // Set brightness (max 7)
} else {
    echo "Device not connected!";
}

// Show "- 42" on the Display
if (!is_null($sd)) {
    $sd->setNumericValue(array($_SESSION['one'], $_SESSION['two'], $_SESSION['three'], $_SESSION['four']));
} else {
    echo "Device not connected!";
}
/*
-2: minus sign
-1: blank
0-9: 0-9
10: A
11: b
12: C
13: d
14: E
15: F
*/

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
try {
    $ipcon->disconnect();
} catch (NotConnectedException $e) {
}