<?php
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletHumidityV2;
include "../header.html";
include "../sidebar.html";
?>
<title>Humidity</title>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard"></span>
            </div>
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

include_once("ip.php");
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

include "../footer.html";