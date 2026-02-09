<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    





<?php
//display date
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br>";
echo date('l, F j, Y');


//display time 
echo "The time is " . date("H:i:s") . "<br>";
echo "The time is " . date("h:i:s a");

echo "<br>";
//set timezone 
date_default_timezone_set("America/New_York");
echo "The current date and time is " . date("Y-m-d H:i:s");


echo "<br>";
echo date_default_timezone_get(); //default time zone eka


echo "//////////////////////////////////////////////////////////////////";
$d = strtotime("10:30pm November 15 2025");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("now");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("+5 days");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("+2 weeks 4 days 2 hours 20 seconds");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("last Sunday");
echo "Date is " . date("Y-m-d H:i:s", $d);


echo"///////////////////////////////////////////////////////////////////";



?>

</body>
</html>