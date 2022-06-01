<?php
require_once "../header.php";
require_once "../sidebar.html";

use Tinkerforge\AlreadyConnectedException;
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletSegmentDisplay4x7V2;
use Tinkerforge\NotConnectedException;

?>
    <title>Clock</title>

    <section class="home-section">
        <nav>
        </nav>

        <div class="home-content">

            <div class="boxes">
                <div class="overview box">
                    <div class="title">Clock</div>
                    <br>
                    <table>
                        <tr>
                            <form method="post">
                                <td><label for="bright">Brightness: </label></td>
                                <td><input name="bright" type="number" min="0" max="7"></td>
                                <td><input type="submit"></td>
                            </form>
                        </tr>
                        <tr>
                            <?php
                            if (empty($_POST['bright'])) {
                                echo "<td>" . "Last Input: " . "</td><td style='text-align: center'>" . "0" . "</td>";
                            } else {
                                echo "<td>" . "Last Input: " . "</td><td style='text-align: center'>" . $_POST['bright'] . "</td>";
                            }
                            ?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!--<form method="post">-->
    <!--    <label for="bright">Helligkeit</label>-->
    <!--    <input type="number" id="bright" name="bright" max="7">-->
    <!--    <button type="submit">Eingeben</button>-->
    <!--</form>-->

<?php
$bright = $_POST['bright'];

include_once "./Tinkerforge/IPConnection.php";
include_once "./Tinkerforge/BrickletSegmentDisplay4x7V2.php";

include_once("ipPort.php");
const UID = 'Tre'; // Change XYZ to the UID of your Segment Display 4x7 Bricklet 2.0

$ipcon = new IPConnection(); // Create IP connection
$sd = new BrickletSegmentDisplay4x7V2(UID, $ipcon); // Create device object

try {
    $ipcon->connect(HOST, PORT); // Connect to brickd
} catch
(AlreadyConnectedException|Exception $e) {
}
// Don't use device before ipcon is connected

$sd->setBrightness($_POST["bright"]); // Set to full brightness (7)

// Show "- 42" on the Display
$sd->setNumericValue(array(-2, -1, 4, 2));
/*
-2: minus sign
-1: blank
0-9: 0-9
10: A
11: b
12: C
13: d
14: E
15: F
*/
echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
try {
    $ipcon->disconnect();
} catch (NotConnectedException $e) {
}