<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ger-DE">
<head>
    <meta charset="UTF-8">
    <title>Speaker</title>
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
            <a href="../clock/clock-html.php">
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
            <a href="./speaker-html.php" class="active">
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
                <div class="title">Speaker</div>
                <br>
                <table>
                    <tr>
                        <form method="post">
                            <td><label for="volume">Volume: </label></td>
                            <td><input name="volume"  id="volume" type="number" min="1" max="10"></td>
                            <td><input type="submit"></td>
                        </form>
                    </tr>
                    <tr>
                        <?php
                        if (!empty($_POST['volume'])) {
                            $_SESSION['volume'] = $_POST['volume'];
                        }

                        echo "<td>" . "Last Input: " . "</td><td style='text-align: center'>" . $_SESSION['volume'] . "</td>";
                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
</body>
</html>