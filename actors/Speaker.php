<?php require_once("../header.html"); ?>

    <h1>Speaker</h1>

<?php
require_once('Tinkerforge/IPConnection.php');
require_once('Tinkerforge/BrickletPiezoSpeakerV2.php');

use Tinkerforge\IPConnection;
use Tinkerforge\BrickletPiezoSpeakerV2;

require_once("ip.php");
const PORT = 4223;
const UID = 'R7M'; // Change XYZ to the UID of your Piezo Speaker Bricklet 2.0

$ipcon = new IPConnection(); // Create IP connection
$ps = new BrickletPiezoSpeakerV2(UID, $ipcon); // Create device object

$ipcon->connect(HOST, PORT); // Connect to brickd
// Don't use device before ipcon is connected

// 10 seconds of loud annoying fast alarm
$ps->setAlarm(800, 2000, 10, 1, 10, 10000);

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
$ipcon->disconnect();