<?php
require_once "../header.php";
require_once "../sidebar.html";

use Tinkerforge\AlreadyConnectedException;
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletAmbientLightV3;
use Tinkerforge\NotConnectedException;

?>
<title>Brightness</title>

<section class="home-section">
    <nav>
    </nav>

    <div class="home-content">

        <div class="boxes">
            <div class="overview box">
                <div class="title">Brightness</div>
                <br>
                <p>Current Brightness:</p>
                <p>
                    <?php

                    ?>
                </p>
            </div>
        </div>
    </div>
</section>

<?php
require_once('Tinkerforge/IPConnection.php');
require_once('Tinkerforge/BrickletAmbientLightV3.php');

include_once("ipPort.php");
const UID = 'Pdw'; // Change XYZ to the UID of your Ambient Light Bricklet 3.0

$ipcon = new IPConnection(); // Create IP connection
$al = new BrickletAmbientLightV3(UID, $ipcon); // Create device object

try {
    $ipcon->connect(HOST, PORT); // Connect to brickd
} catch (AlreadyConnectedException|Exception $e) {
}
// Don't use device before ipcon is connected

// Get current Illuminance
$illuminance = $al->getIlluminance();
echo "Illuminance: " . $illuminance / 100.0 . " lx\n";

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
try {
    $ipcon->disconnect();
} catch (NotConnectedException $e) {
}
?>

