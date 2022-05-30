<?php
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletMotionDetectorV2;
include "../header.html";
include "../sidebar.html";
?>
<title>Motion Detection</title>

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
                    <div class="title">Motion Detection</div>
                </div>
            </div>
        </div>
    </section>

<?php
include_once('Tinkerforge/IPConnection.php');
include_once('Tinkerforge/BrickletMotionDetectorV2.php');

include_once("ip.php");
const PORT = 4223;
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

$ipcon->connect(HOST, PORT); // Connect to brickd
// Don't use device before ipcon is connected

// Register motion detected callback to function cb_motionDetected
$md->registerCallback(BrickletMotionDetectorV2::CALLBACK_MOTION_DETECTED,
    'cb_motionDetected');

// Register detection cycle ended callback to function cb_detectionCycleEnded
$md->registerCallback(BrickletMotionDetectorV2::CALLBACK_DETECTION_CYCLE_ENDED,
    'cb_detectionCycleEnded');

// Turn blue backlight LEDs on (maximum brightness)
$md->setIndicator(255, 255, 255);

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
$ipcon->disconnect();

echo "Press ctrl+c to exit\n";
$ipcon->dispatchCallbacks(-1); // Dispatch callbacks forever

include "../footer.html";