<?php
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletRGBLEDButton;
include "../header.html";
include "../sidebar.html";
?>
<title>Button</title>

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
                    <div class="title">Button</div>
                </div>
            </div>
        </div>
    </section>

<?php
include_once('Tinkerforge/IPConnection.php');
include_once('Tinkerforge/BrickletRGBLEDButton.php');

include_once("ip.php");
const PORT = 4223;
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

$ipcon->connect(HOST, PORT); // Connect to brickd
// Don't use device before ipcon is connected

// Register button state changed callback to function cb_buttonStateChanged
$rlb->registerCallback(BrickletRGBLEDButton::CALLBACK_BUTTON_STATE_CHANGED,
    'cb_buttonStateChanged');

echo "Press ctrl+c to exit\n";
$ipcon->dispatchCallbacks(-1); // Dispatch callbacks forever

include "../footer.html";