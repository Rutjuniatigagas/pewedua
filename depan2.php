<?php

require 'app/View.php';
require 'src/View,php';

use app\View;
$V= new View();
$V-> render();
echo "<br>";

$x = new \app\View();
$x-> render();
?>