<?php require_once("../header.html"); ?>

    <h1>Temperature</h1>

<?php
require_once('Tinkerforge/IPConnection.php');
require_once('Tinkerforge/BrickletPTCV2.php');

use Tinkerforge\IPConnection;
use Tinkerforge\BrickletPTCV2;

require_once("ip.php");
const PORT = 4223;
const UID = 'Wcg'; // Change XYZ to the UID of your PTC Bricklet 2.0

// Callback function for temperature callback
function cb_temperature($temperature)
{
    echo "Temperature: " . $temperature/100.0 . " °C\n";
}

$ipcon = new IPConnection(); // Create IP connection
$ptc = new BrickletPTCV2(UID, $ipcon); // Create device object

$ipcon->connect(HOST, PORT); // Connect to brickd
// Don't use device before ipcon is connected

// Register temperature callback to function cb_temperature
$ptc->registerCallback(BrickletPTCV2::CALLBACK_TEMPERATURE, 'cb_temperature');

// Set period for temperature callback to 1s (1000ms) without a threshold
$ptc->setTemperatureCallbackConfiguration(1000, FALSE, 'x', 0, 0);

//$ptc->getTemperature();

echo "Press ctrl+c to exit\n";
$ipcon->dispatchCallbacks(-1); // Dispatch callbacks forever