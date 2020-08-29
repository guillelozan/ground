<?php

// leemos la variable externa date y asignando un valor por defecto
$current=(isset($_GET['date']))?$_GET['date']:date("Y-m");

$current_parts=explode('-',$current); // dividimos la variable en partes
$current_string=$current_parts['0']."-".$current_parts['1']; // unimos las partes en un fecha string 
$current_unix=strtotime($current_string); // convertimos la fecha string en fecha unix

$current_date=date("F Y",$current_unix); // le damos formato mes año

$prev_date=date("Y-m",strtotime("-1 month",$current_unix)); //  mes anterior

$next_date=date("Y-m",strtotime("+1 month",$current_unix)); // mes siguiente


// render
echo "<h1>$current_date</h1>";

echo "<div>";
echo "<a href='months.php?date=$prev_date'>prev month</a>";
echo " - ";
echo "<a href='months.php?date=$next_date'>next month</a>";
echo "</div>";

echo "<br>";
echo "<br>";
echo "<div><a href='numbers.php'>number 100</a></div>";
echo "<div><a href='days.php'>today</a></div>";
echo "<div><a href='months.php'>this month</a></div>";
