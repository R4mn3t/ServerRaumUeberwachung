<?php
require_once "../header.php";
require_once "../sidebar.html";

use Tinkerforge\AlreadyConnectedException;
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletPTCV2;

include_once('../Tinkerforge/IPConnection.php');
include_once('../Tinkerforge/BrickletPTCV2.php');

include_once("../ipPort.php");
const UID = 'Wcg'; // Change XYZ to the UID of your PTC Bricklet 2.0

echo "<title>Temperature</title>";

// Callback function for temperature callback
function cb_temperature($temperature)
{
    echo "Temperature: " . $temperature / 100.0 . " °C\n";
}

$ipcon = new IPConnection(); // Create IP connection
$ptc = null;
$temperature = null;

try {
    $ipcon->connect(HOST, PORT); // Connect to brickd
} catch (AlreadyConnectedException|Exception $e) {
}

if ($ipcon->getConnectionState() === IPConnection::ENUMERATION_TYPE_CONNECTED) {
    $ptc = new BrickletPTCV2(UID, $ipcon); // Create device object
}
// Don't use device before ipcon is connected

// Register temperature callback to function cb_temperature
try {
    if (!is_null($ptc)) {
        $ptc->registerCallback(BrickletPTCV2::CALLBACK_TEMPERATURE, 'cb_temperature');
    }
} catch (Exception $e) {
}

// Set period for temperature callback to 1s (1000ms) without a threshold
if (!is_null($ptc)) {
    $ptc->setTemperatureCallbackConfiguration(1000, FALSE, 'x', 0, 0);
}

if (!is_null($ptc)) {
    $temperature = $ptc->getTemperature();
} else {
    echo "Device not connected!";
}
?>

<section class="home-section">
    <nav>
    </nav>

    <div class="home-content">

        <div class="boxes">
            <div class="overview box">
                <div class="title">Temperature</div>
                <br>
                <p>Current Temperature: </p>
                <p>
                    <?php
                        echo $temperature;
                    ?>
                </p>
            </div>
        </div>
    </div>
</section>

<?php
echo "Press ctrl+c to exit\n";
$ipcon->dispatchCallbacks(-1); // Dispatch callbacks forever