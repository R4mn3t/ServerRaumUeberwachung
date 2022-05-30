<?php
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletAmbientLightV3;
include "../header.html";
include "../sidebar.html";
?>
<title>Brightness</title>

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
                    <div class="title">Brightness</div>
                </div>
            </div>
        </div>
    </section>

<?php
include_once('Tinkerforge/IPConnection.php');
include_once('Tinkerforge/BrickletAmbientLightV3.php');

include_once("ip.php");
const PORT = 4223;
const UID = 'Pdw'; // Change XYZ to the UID of your Ambient Light Bricklet 3.0

$ipcon = new IPConnection(); // Create IP connection
$al = new BrickletAmbientLightV3(UID, $ipcon); // Create device object

$ipcon->connect(HOST, PORT); // Connect to brickd
// Don't use device before ipcon is connected

// Get current Illuminance
$illuminance = $al->getIlluminance();
echo "Illuminance: " . $illuminance/100.0 . " lx\n";

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
$ipcon->disconnect();

include "../footer.html";