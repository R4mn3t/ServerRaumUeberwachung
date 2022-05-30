<?php require_once("../header.html"); ?>

    <h1>Clock</h1>

<form method="post">
    <label for="bright">Helligkeit</label>
    <input type="number" id="bright" name="bright" max="7">
    <button type="submit">Eingeben</button>
</form>

<?php
require_once('./Tinkerforge/IPConnection.php');
require_once('./Tinkerforge/BrickletSegmentDisplay4x7V2.php');

use Tinkerforge\IPConnection;
use Tinkerforge\BrickletSegmentDisplay4x7V2;

require_once("ip.php");
const PORT = 4223;
const UID = 'Tre'; // Change XYZ to the UID of your Segment Display 4x7 Bricklet 2.0

$ipcon = new IPConnection(); // Create IP connection
$sd = new BrickletSegmentDisplay4x7V2(UID, $ipcon); // Create device object

$ipcon->connect(HOST, PORT); // Connect to brickd
// Don't use device before ipcon is connected

$sd->setBrightness($_POST["bright"]); // Set to full brightness (7)

// Show "- 42" on the Display
$sd->setNumericValue(array(-2, -1, 4, 2));

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
$ipcon->disconnect();