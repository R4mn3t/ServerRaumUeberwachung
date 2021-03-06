<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ger-DE">
<head>
    <meta charset="UTF-8">
    <title>Button</title>
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
            <a href="./button-html.php" class="active">
                <span class="links_name" style="margin-left: 30px">Button</span>
            </a>
        </li>
        <li>
            <a href="../brightness/brightness-html.php">
                <span class="links_name" style="margin-left: 30px">Brightness</span>
            </a>
        </li>
        <li>
            <a href="../../actors/clock/clock-html.php">
                <span class="links_name" style="margin-left: 30px">Clock</span>
            </a>
        </li>
        <li>
            <a href="../../actors/display/display-html.php">
                <span class="links_name" style="margin-left: 30px">Display</span>
            </a>
        </li>
        <li>
            <a href="../humidity/humidity-html.php">
                <span class="links_name" style="margin-left: 30px">Humidity</span>
            </a>
        </li>
        <li>
            <a href="../motion/motion-html.php">
                <span class="links_name" style="margin-left: 30px">Motion Detection</span>
            </a>
        </li>
        <li>
            <a href="../../actors/speaker/speaker-html.php">
                <span class="links_name" style="margin-left: 30px">Speaker</span>
            </a>
        </li>
        <li>
            <a href="../temperature/temperature-html.php">
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
                <div class="title">Button</div>
                <br>
                <table>
                    <tr>
                        <form method="post">
                            <td><label for="red">Red: </label></td>
                            <td><input type="number" min="0" max="255" name="red" id="red"></td>
                    </tr>

                    <tr>
                        <td><label for="green">Green: </label></td>
                        <td><input type="number" min="0" max="255" name="green" id="green"></td>
                    </tr>

                    <tr>
                        <td><label for="blue">Blue: </label></td>
                        <td><input type="number" min="0" max="255" name="blue" id="blue"></td>
                    </tr>

                    <tr>
                        <td><input type="submit"></td>
                    </tr>
                </table>
                <br>
                <table>
                    <?php
                    if (!empty($_POST['red']) || !empty($_POST['green']) || !empty($_POST['blue'])) {
                        $_SESSION['red'] = $_POST['red'];
                        $_SESSION['green'] = $_POST['green'];
                        $_SESSION['blue'] = $_POST['blue'];
                    }
                    echo "<tr><td>" . "Last Input: " . "</td></tr><td style='text-align: center'>" . "Red: " . $_SESSION['red'] . " " . "Green: " . $_SESSION['green'] . " " . "Blue: " . $_SESSION['blue'] . " " . "</td>";
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>
</body>
</html>