<?php
require_once "../header.php";
require_once "../sidebar.html";

use Tinkerforge\AlreadyConnectedException;
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletRGBLEDButton;

?>
    <title>Button</title>

    <section class="home-section">
        <nav>
        </nav>

        <div class="home-content">

            <div class="boxes">
                <div class="overview box">
                    <div class="title">Button</div>
                    <br>
                </div>
            </div>
        </div>
    </section>

<?php
include_once('Tinkerforge/IPConnection.php');
include_once('Tinkerforge/BrickletRGBLEDButton.php');

include_once("ipPort.php");
const UID = 'XBe'; // Change XYZ to the UID of your RGB LED Button Bricklet

// Callback function for button state changed callback
function cb_buttonStateChanged($state)
{
    if ($state == BrickletRGBLEDButton::BUTTON_STATE_PRESSED) {
        echo "State: Pressed\n";
    } elseif ($state == BrickletRGBLEDButton::BUTTON_STATE_RELEASED) {
        echo "State: Released\n";
    }
}

$ipcon = new IPConnection(); // Create IP connection
$rlb = new BrickletRGBLEDButton(UID, $ipcon); // Create device object

try {
    $ipcon->connect(HOST, PORT); // Connect to brickd
} catch (AlreadyConnectedException|Exception $e) {
}
// Don't use device before ipcon is connected

// Register button state changed callback to function cb_buttonStateChanged
try {
    $rlb->registerCallback(BrickletRGBLEDButton::CALLBACK_BUTTON_STATE_CHANGED,
        'cb_buttonStateChanged');
} catch (Exception $e) {
}

echo "Press ctrl+c to exit\n";
$ipcon->dispatchCallbacks(-1); // Dispatch callbacks forever