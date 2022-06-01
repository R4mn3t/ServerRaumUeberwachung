<?php
require_once "../header.php";
require_once "../sidebar.html";

use Tinkerforge\AlreadyConnectedException;
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletPiezoSpeakerV2;
use Tinkerforge\NotConnectedException;

$volume = null;

?>
    <title>Speaker</title>

    <section class="home-section">
        <nav>
        </nav>

        <div class="home-content">

            <div class="boxes">
                <div class="overview box">
                    <div class="title">Speaker</div>
                    <br>
                    <table>
                        <tr>
                            <form method="post">
                                <td><label for="volume">Volume: </label></td>
                                <td><input name="volume" type="number" min="1" max="10"></td>
                                <td><input type="submit"></td>
                            </form>
                        </tr>
                        <tr>
                            <?php
                            if (empty($_POST['volume'])) {
                                echo "<td>" . "Last Input: " . "</td><td style='text-align: center'>" . 1 . "</td>";
                            } else {
                                echo "<td>" . "Last Input: " . "</td><td style='text-align: center'>" . $_POST['volume'] . "</td>";
                            }
                            ?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

<?php
$volume = $_POST['volume'];

include_once('Tinkerforge/IPConnection.php');
include_once('Tinkerforge/BrickletPiezoSpeakerV2.php');

include_once("ipPort.php");
const UID = 'R7M'; // Change XYZ to the UID of your Piezo Speaker Bricklet 2.0

$ipcon = new IPConnection(); // Create IP connection
$ps = new BrickletPiezoSpeakerV2(UID, $ipcon); // Create device object

try {
    $ipcon->connect(HOST, PORT); // Connect to brickd
} catch (AlreadyConnectedException|Exception $e) {
}
// Don't use device before ipcon is connected

// 10 seconds of loud annoying fast alarm
$ps->setAlarm(800, 2000, 10, 1, $volume, 10000);

echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
try {
    $ipcon->disconnect();
} catch (NotConnectedException $e) {
}