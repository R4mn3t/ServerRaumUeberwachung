<?php
require_once "../header.php";
require_once "../sidebar.html";

use Tinkerforge\AlreadyConnectedException;
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletMotionDetectorV2;
use Tinkerforge\NotConnectedException;

?>
    <title>Motion Detection</title>

    <section class="home-section">
        <nav>
        </nav>

        <div class="home-content">

            <div class="boxes">
                <div class="overview box">
                    <div class="title">Motion Detection</div>
                </div>
            </div>
        </div>
    </section>

<?php
include_once('Tinkerforge/IPConnection.php');
include_once('Tinkerforge/BrickletMotionDetectorV2.php');

include_once("ipPort.php");
const UID = 'ML4'; // Change XYZ to the UID of your Motion Detector Bricklet 2.0

// Callback function for motion detected callback
function cb_motionDetected()
{
    echo "Motion Detected\n";
}

// Callback function for detection cycle ended callback
function cb_detectionCycleEnded()
{
    echo "Detection Cycle Ended (next detection possible in ~2 seconds)\n";
}

$ipcon = new IPConnection(); // Create IP connection
$md = new BrickletMotionDetectorV2(UID, $ipcon); // Create device object

try {
    $ipcon->connect(HOST, PORT); // Connect to brickd
} catch (AlreadyConnectedException|Exception $e) {
}
// Don't use device before ipcon is connected

// Register motion detected callback to function cb_motionDetected
try {
    $md->registerCallback(BrickletMotionDetectorV2::CALLBACK_MOTION_DETECTED,
        'cb_motionDetected');
} catch (Exception $e) {
}

// Register detection cycle ended callback to function cb_detectionCycleEnded
try {
    $md->registerCallback(BrickletMotionDetectorV2::CALLBACK_DETECTION_CYCLE_ENDED,
        'cb_detectionCycleEnded');
} catch (Exception $e) {
}

// Turn blue backlight LEDs on (maximum brightness)
$md->setIndicator(255, 255, 255);

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
try {
    $ipcon->disconnect();
} catch (NotConnectedException $e) {
}

echo "Press ctrl+c to exit\n";
$ipcon->dispatchCallbacks(-1); // Dispatch callbacks forever