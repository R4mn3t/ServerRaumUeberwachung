<?php
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletPTCV2;
include "../header.html";
include "../sidebar.html";
?>
<title>Temperature</title>

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
                    <div class="title">Temperature</div>
                </div>
            </div>
        </div>
    </section>

<?php
include_once('Tinkerforge/IPConnection.php');
include_once('Tinkerforge/BrickletPTCV2.php');

include_once("ip.php");
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

include "../footer.html";