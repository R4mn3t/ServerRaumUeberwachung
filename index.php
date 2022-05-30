<!DOCTYPE html>
<html lang="ger-DE">
<head>
    <meta charset="utf-8">
    <title>Serverraum Überwachung</title>
    <style>
        .dropdown {
            display: inline-block;
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            width: 100%;
            overflow: auto;
            box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0.4);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            display: block;
            color: #000000;
            padding: 5px;
            text-decoration: none;
        }

        .dropdown-content a:hover {
            color: #FFFFFF;
            background-color: #00A4BD;
        }
    </style>
</head>
<body>
<header>
    <h1>Serverraum Überwachung</h1>
</header>

<div class="dropdown">
    <button>Aktoren</button>
    <div class="dropdown-content">
        <a href="actors/Button-A.php">Button</a>
        <a href="actors/Clock.php">Clock</a>
        <a href="actors/Display.php">Display</a>
        <a href="actors/Motion-A.php">Motion</a>
        <a href="actors/Speaker.php">Speaker</a>
    </div>
</div>

<div class="dropdown">
    <button>Sensoren</button>
    <div class="dropdown-content">
        <a href="sensors/Brightness.php">Brightness</a>
        <a href="sensors/Button.php">Button</a>
        <a href="sensors/Humidity.php">Humidity</a>
        <a href="sensors/Motion.php">Motion</a>
        <a href="sensors/Temperature.php">Temperature</a>
    </div>
</div>
</body>
</html>
