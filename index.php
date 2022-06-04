<!DOCTYPE html>
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
            <a href="./sensors/button/button-html.php">
                <span class="links_name" style="margin-left: 30px">Button</span>
            </a>
        </li>
        <li>
            <a href="./sensors/brightness/brightness-html.php">
                <span class="links_name" style="margin-left: 30px">Brightness</span>
            </a>
        </li>
        <li>
            <a href="./actors/clock/clock-html.php">
                <span class="links_name" style="margin-left: 30px">Clock</span>
            </a>
        </li>
        <li>
            <a href="./actors/display/display-html.php">
                <span class="links_name" style="margin-left: 30px">Display</span>
            </a>
        </li>
        <li>
            <a href="./sensors/humidity/humidity-html.php">
                <span class="links_name" style="margin-left: 30px">Humidity</span>
            </a>
        </li>
        <li>
            <a href="./sensors/motion/motion-html.php">
                <span class="links_name" style="margin-left: 30px">Motion Detection</span>
            </a>
        </li>
        <li>
            <a href="./actors/speaker/speaker-html.php">
                <span class="links_name" style="margin-left: 30px">Speaker</span>
            </a>
        </li>
        <li>
            <a href="./sensors/temperature/temperature-html.php">
                <span class="links_name" style="margin-left: 30px">Temperature</span>
            </a>
        </li>
    </ul>
</div>

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
                        <div class="number"><?php if (!empty($_SESSION['humidity'])) {echo $_SESSION['humidity'];} ?></div>
                    </div>
                </div>
                <br>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Temperature: </div>
                        <div class="number"><?php if (!empty($_SESSION['temperature'])) {echo $_SESSION['temperature'];} ?></div>
                    </div>
                </div>
                <br>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Brightness: </div>
                        <div class="number"><?php if (!empty($_SESSION['illuminance'])) {echo $_SESSION['illuminance'];} ?></div>
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

<!--Aufgaben-->
<!--Index anpassen-->
<!--Automatische Mail bei kritischen Ereignissen erstellen-->