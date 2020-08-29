<?php

// if($_GET['date']){

//     $current=$_GET['date'];

// } else {

//     $current=date("Y-m-d");

// }

// leyendo la variable externa date y asignando un valor por defecto
$current=(isset($_GET['date']))?$_GET['date']:date("Y-m-d");

$current_parts=explode('-',$current); // lo divido en partes
$current_string=$current_parts['0']."-".$current_parts['1']."-".$current_parts['2']; // uno las partes para que formen una fecha
$current_unix=strtotime($current_string); // convierto la fecha string en fecha unix

$current_date=date("D, dS F Y",$current_unix); // fecha con formato

$prev_date=date("Y-m-d",strtotime("-1 day",$current_unix)); // dia anterior

$next_date=date("Y-m-d",strtotime("+1 day",$current_unix)); // dia siguiente


// render   
echo "<h1>$current_date</h1>";

echo "<div>";
echo "<a href='days.php?date=$prev_date'>prev day</a>";
echo " - ";
echo "<a href='days.php?date=$next_date'>next day</a>";
echo "</div>";

echo "<br>";
echo "<br>";
echo "<div><a href='numbers.php'>number 100</a></div>";
echo "<div><a href='days.php'>today</a></div>";
echo "<div><a href='months.php'>this month</a></div>";
