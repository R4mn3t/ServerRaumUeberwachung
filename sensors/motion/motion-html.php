<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ger-DE">
<head>
    <meta charset="UTF-8">
    <title>Motion Detection</title>
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
            <a href="../button/button-html.php">
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
            <a href="./motion-html.php" class="active">
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
                <div class="title">Motion Detection</div>
                <br>
                <p>Light Setting:</p>
                <table>
                    <form method="post">
                        <tr>
                            <td><label for="top-left">Top Left: </label></td>
                            <td><input name="top-left" id="top-left" type="number" min="0" max="255"></td>
                        </tr>
                        <tr>
                            <td><label for="top-right">Top Right: </label></td>
                            <td><input name="top-right" id="top-right" type="number" min="0" max="255"></td>
                        </tr>
                        <tr>
                            <td><label for="bottom">Bottom: </label></td>
                            <td><input name="bottom" id="bottom" type="number" min="0" max="255"></td>
                        </tr>
                        <tr>
                            <td><input type="submit"></td>
                        </tr>
                    </form>
                </table>
                <br>
                <table>
                    <?php
                    if (!empty($_POST['top-left']) || !empty($_POST['top-right']) || !empty($_POST['bottom'])) {
                        $_SESSION['top-left'] = $_POST['top-left'];
                        $_SESSION['top-right'] = $_POST['top-right'];
                        $_SESSION['bottom'] = $_POST['bottom'];
                    }
                    echo "<tr><td>" . "Last Input: " . "</td></tr><td style='text-align: center'>" . "Top Left: " . $_SESSION['top-left'] . " " . "Top Right: " . $_SESSION['top-right'] . " " . "Bottom: " . $_SESSION['bottom'] . " " . "</td>";
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>
</body>
</html>