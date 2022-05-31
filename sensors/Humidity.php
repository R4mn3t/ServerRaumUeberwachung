<?php
require_once "../header.php";
require_once "../sidebar.html";

use Tinkerforge\AlreadyConnectedException;
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletHumidityV2;
use Tinkerforge\NotConnectedException;

?>
    <title>Humidity</title>

    <section class="home-section">
        <nav>
        </nav>

        <div class="home-content">

            <div class="boxes">
                <div class="overview box">
                    <div class="title">Humidity</div>
                </div>
            </div>
        </div>
    </section>

<?php
include_once('Tinkerforge/IPConnection.php');
include_once('Tinkerforge/BrickletHumidityV2.php');

include_once("ipPort.php");
const UID = 'ViW'; // Change XYZ to the UID of your Humidity Bricklet 2.0

$ipcon = new IPConnection(); // Create IP connection
$h = new BrickletHumidityV2(UID, $ipcon); // Create device object

try {
    $ipcon->connect(HOST, PORT); // Connect to brickd
} catch (AlreadyConnectedException|Exception $e) {
}
// Don't use device before ipcon is connected

// Get current humidity
$humidity = $h->getHumidity();
echo "Humidity: " . $humidity / 100.0 . " %RH\n";

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
try {
    $ipcon->disconnect();
} catch (NotConnectedException $e) {
}