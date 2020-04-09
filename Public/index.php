<?php
require "../vendor/autoload.php";

$hl = new App\Wcs\Hello();
echo $hl->talk() . "<br>";

$hw = \HelloWorld\SayHello::world();
echo $hw;