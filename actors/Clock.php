<?php
use Tinkerforge\IPConnection;
use Tinkerforge\BrickletSegmentDisplay4x7V2;
include "../header.html";
include "../sidebar.html";
?>
<title>Clock</title>

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
                <div class="title">Clock</div>
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
include_once "./Tinkerforge/IPConnection.php";
include_once "./Tinkerforge/BrickletSegmentDisplay4x7V2.php";

include_once("ip.php");
const PORT = 4223;
const UID = 'Tre'; // Change XYZ to the UID of your Segment Display 4x7 Bricklet 2.0

$ipcon = new IPConnection(); // Create IP connection
$sd = new BrickletSegmentDisplay4x7V2(UID, $ipcon); // Create device object

$ipcon->connect(HOST, PORT); // Connect to brickd
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
$ipcon->disconnect();

include_once "footer.html";
?>
</body>
</html>
