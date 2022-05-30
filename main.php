<?php
include("actors/Button-A.php");
include("actors/Clock.php");
include("actors/Display.php");
include("actors/Motion-A.php");
include("actors/Speaker.php");

include ("sensors/Brightness.php");
include ("sensors/Button.php");
include ("sensors/Humidity.php");
include ("sensors/Motion.php");
include ("sensors/Temperature.php");

$temp = $ptc->getTemperature();
$sd->setNumericValue(array($temp));