<?php

// leyendo la variable externa number y asignando un valor por defecto
$current=(isset($_GET['number']))?$_GET['number']:100;


$prev=$current-1; // el numero anterior
$next=$current+1; // el numero siguiente


// render
echo "<h1>number $current</h1>";

echo "<a href='numbers.php?number=$prev'>prev number</a>";

echo " - ";

echo "<a href='numbers.php?number=$next'>next number</a>";


echo "<br>";
echo "<br>";
echo "<div><a href='numbers.php'>number 100</a></div>";
echo "<div><a href='days.php'>today</a></div>";
echo "<div><a href='months.php'>this month</a></div>";