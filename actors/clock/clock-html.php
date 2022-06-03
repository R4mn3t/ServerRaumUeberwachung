<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ger-DE">
<head>
    <meta charset="UTF-8">
    <title>Clock</title>
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
            <a href="../../sensors/button/button-html.php">
                <span class="links_name" style="margin-left: 30px">Button</span>
            </a>
        </li>
        <li>
            <a href="../../sensors/brightness/brightness-html.php">
                <span class="links_name" style="margin-left: 30px">Brightness</span>
            </a>
        </li>
        <li>
            <a href="./clock-html.php" class="active">
                <span class="links_name" style="margin-left: 30px">Clock</span>
            </a>
        </li>
        <li>
            <a href="../display/display-html.php">
                <span class="links_name" style="margin-left: 30px">Display</span>
            </a>
        </li>
        <li>
            <a href="../../sensors/humidity/humidity-html.php">
                <span class="links_name" style="margin-left: 30px">Humidity</span>
            </a>
        </li>
        <li>
            <a href="../../sensors/motion/motion-html.php">
                <span class="links_name" style="margin-left: 30px">Motion Detection</span>
            </a>
        </li>
        <li>
            <a href="../speaker/speaker-html.php">
                <span class="links_name" style="margin-left: 30px">Speaker</span>
            </a>
        </li>
        <li>
            <a href="../../sensors/temperature/temperature-html.php">
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
                <div class="title">Clock</div>
                <br>
                <table>
                    <tr>
                        <form method="post" action="Clock.php">
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
                            $bright = $_POST['bright'];
                            $_SESSION['bright'] = $bright;
                            echo "<td>" . "Last Input: " . "</td><td style='text-align: center'>" . $_SESSION['bright'] . "</td>";
                        }
                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
</body>
</html>