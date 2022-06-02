<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
<head>
    <title>Serverraum Überwachung</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css?<?php echo time(); ?>">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./library/KSTL%20Logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="sidebar">
    <div class="logo-details">
        <span class="logo_name" style="margin-left: 30px">Serverraum Überwachung</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="./sensors/Button.php">
                <span class="links_name" style="margin-left: 30px">Button</span>
            </a>
        </li>
        <li>
            <a href="./sensors/Brightness.php">
                <span class="links_name" style="margin-left: 30px">Brightness</span>
            </a>
        </li>
        <li>
            <a href="./actors/Clock.php">
                <span class="links_name" style="margin-left: 30px">Clock</span>
            </a>
        </li>
        <li>
            <a href="./actors/Display.php">
                <span class="links_name" style="margin-left: 30px">Display</span>
            </a>
        </li>
        <li>
            <a href="./sensors/Humidity.php">
                <span class="links_name" style="margin-left: 30px">Humidity</span>
            </a>
        </li>
        <li>
            <a href="./sensors/Motion.php">
                <span class="links_name" style="margin-left: 30px">Motion Detection</span>
            </a>
        </li>
        <li>
            <a href="./actors/Speaker.php">
                <span class="links_name" style="margin-left: 30px">Speaker</span>
            </a>
        </li>
        <li>
            <a href="./sensors/Temperature.php">
                <span class="links_name" style="margin-left: 30px">Temperature</span>
            </a>
        </li>
    </ul>
</div>

<?php

$humidity = require_once ("./sensors/Humidity.php");
require_once ("./sensors/Temperature.php");
require_once ("./sensors/Motion.php");

?>
<section class="home-section">
    <nav>
    </nav>

    <div class="home-content">

        <div class="boxes">
            <div class="overview box">
                <div class="title">Overview</div>
                <br>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Humidity: </div>
                        <div class="number"><?php echo $humidity;?></div>
                    </div>
                </div>
                <br>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Temperature: </div>
                        <div class="number"><?php ?></div>
                    </div>
                </div>
                <br>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Motion Detection: </div>
                        <div class="number"><?php ?></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<script>
    window.setInterval('refresh()', 10000);

    function refresh() {
        window.location.reload();
    }
</script>
</body>
</html>