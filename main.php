<?php
require_once("actors/Clock.php");
require_once("actors/Display.php");
require_once("actors/Speaker.php");

require_once ("sensors/Brightness.php");
require_once ("sensors/Button.php");
require_once ("sensors/Humidity.php");
require_once ("sensors/Motion.php");
require_once ("sensors/Temperature.php");

$temp = $ptc->getTemperature();
$sd->setNumericValue(array($temp));