<?php namespace sensors\Humidity; ?>

    <!DOCTYPE html>
    <html lang="ger-DE">
    <head>
        <meta charset="UTF-8">
        <title>Humidity</title>
        <link rel="stylesheet" href="../../style.css?<?php echo time(); ?>">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="shortcut icon" href="../../library/KSTL%20Logo.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

    <div class="sidebar">
        <div class="logo-details" style="margin-left: 30px">
            <a href="../../index.php">
                <span class="logo_name">Serverraum Überwachung</span>
            </a>
        </div>
        <ul class="nav-links">
            <li>
                <a href="../button/Button.php">
                    <span class="links_name" style="margin-left: 30px">Button</span>
                </a>
            </li>
            <li>
                <a href="../brightness/Brightness.php">
                    <span class="links_name" style="margin-left: 30px">Brightness</span>
                </a>
            </li>
            <li>
                <a href="../../actors/clock/Clock.php">
                    <span class="links_name" style="margin-left: 30px">Clock</span>
                </a>
            </li>
            <li>
                <a href="../../actors/display/Display.php">
                    <span class="links_name" style="margin-left: 30px">Display</span>
                </a>
            </li>
            <li>
                <a href="Humidity.php" class="active">
                    <span class="links_name" style="margin-left: 30px">Humidity</span>
                </a>
            </li>
            <li>
                <a href="../motion/Motion.php">
                    <span class="links_name" style="margin-left: 30px">Motion Detection</span>
                </a>
            </li>
            <li>
                <a href="../../actors/speaker/Speaker.php">
                    <span class="links_name" style="margin-left: 30px">Speaker</span>
                </a>
            </li>
            <li>
                <a href="../temperature/Temperature.php">
                    <span class="links_name" style="margin-left: 30px">Temperature</span>
                </a>
            </li>
        </ul>
    </div>

    <?php

    use Tinkerforge\AlreadyConnectedException;
    use Tinkerforge\IPConnection;
    use Tinkerforge\BrickletHumidityV2;
    use Tinkerforge\NotConnectedException;

    include_once('../Tinkerforge/IPConnection.php');
    include_once('../Tinkerforge/BrickletHumidityV2.php');

    include_once("../ipPort.php");
    const UID = 'ViW'; // Change XYZ to the UID of your Humidity Bricklet 2.0

    $ipcon = new IPConnection(); // Create IP connection
    $h = null;
    $humidity = null;

    try {
        $ipcon->connect(HOST, PORT); // Connect to brickd
    } catch (AlreadyConnectedException|Exception $e) {
    }

    // Check connection
    if ($ipcon->getConnectionState() === IPConnection::ENUMERATION_TYPE_CONNECTED) {
        $h = new BrickletHumidityV2(UID, $ipcon); // Create device object
    } else {
        echo "Device not connected!";
    }
    // Don't use device before ipcon is connected

    // Get current humidity
    if (!is_null($h)) {
        $humidity = $h->getHumidity();
        $humidity = "Humidity: " . $humidity / 100.0 . " %RH\n";
    }
    ?>

    <section class="home-section">
        <nav>
        </nav>

        <div class="home-content">

            <div class="boxes">
                <div class="overview box">
                    <div class="title">Humidity</div>
                    <br>
                    <p>Current Humidity: <?php echo $humidity; ?></p>
                </div>
            </div>
        </div>
    </section>
    </body>
    </html>
    <?php
if ($ipcon->getConnectionState() === IPConnection::ENUMERATION_TYPE_CONNECTED) {
    return $humidity;
}
echo "Press key to exit\n";
fgetc(fopen('php://stdin', 'r'));
try {
    $ipcon->disconnect();
} catch (NotConnectedException $e) {
}