<?php
session_start();

use Tinkerforge\AlreadyConnectedException;
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletRGBLEDButton;

include_once('../../Tinkerforge/IPConnection.php');
include_once('../../Tinkerforge/BrickletRGBLEDButton.php');

include_once("../../ipPort.php");
const UID = 'XBe'; // Change XYZ to the UID of your RGB LED Button Bricklet

// Callback function for button state changed callback
function cb_buttonStateChanged($state): void
{
    if ($state == BrickletRGBLEDButton::BUTTON_STATE_PRESSED) {
        $_SESSION['buttonState'] = 'pressed';
        echo "State: Pressed\n";
    } elseif ($state == BrickletRGBLEDButton::BUTTON_STATE_RELEASED) {
        $_SESSION['buttonState'] = 'released';
        echo "State: Released\n";
    }
}

$ipcon = new IPConnection(); // Create IP connection
$rlb = null;

try {
    $ipcon->connect($_SESSION['ip'], $_SESSION['port']); // Connect to brickd
} catch (AlreadyConnectedException|Exception $e) {
}

// Check connection
if ($ipcon->getConnectionState() === IPConnection::ENUMERATION_TYPE_CONNECTED) {
    $rlb = new BrickletRGBLEDButton(UID, $ipcon); // Create device object
} else {
    echo "Device not connected!";
}
// Don't use device before ipcon is connected

// Set light blue color
$rlb->setColor($_SESSION['red'], $_SESSION['green'], $_SESSION['blue']);

// Register button state changed callback to function cb_buttonStateChanged
try {
    $rlb->registerCallback(BrickletRGBLEDButton::CALLBACK_BUTTON_STATE_CHANGED,
        'cb_buttonStateChanged');
} catch (Exception $e) {
}

echo "Press ctrl+c to exit\n";
$ipcon->dispatchCallbacks(-1); // Dispatch callbacks forever