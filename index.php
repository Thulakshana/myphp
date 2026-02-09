<?php

include_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php require 'register.php';?>
    
<?php
$x = 100;
$y = 1000;
$c = 10;

function test() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

test();

echo $y . "<br>";   // prints value

var_dump($y);       // shows type + value

echo "<br>";

var_dump(is_int($c));  // checks integer (true/false)

echo "<br>";
$a=10.5;
var_dump(is_int($a));
echo PHP_FLOAT_MAX;
echo "<br>";

$b=acos(4);
var_dump(is_nan($b));
echo "<br>";


//is numeric= gananda kiyala check karanawa
$x = 5985;
var_dump(is_numeric($x));
echo "<br>";
$x = "5985";
var_dump(is_numeric($x));
echo "<br>";
$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br";
$x = "Hello";
var_dump(is_numeric($x));
echo "<br>";


$xq = "23465.768";
echo intval($xq); // purna ganan witharai

echo"<br>";
//type casting 

$ca=19;
$ca =(String)$ca;
var_dump($ca);


echo "<br>";
$cb="hello";
$cb=(int)$cb;
var_dump($cb);
echo "<br>";
var_dump(is_numeric($cb));
echo"<br>";

class car{
    public $color;
    public $model;

    public function __construct($color,$model){
        $this->color=$color;
        $this->model=$model;
    }

    public function message(){
        echo "my car is a ".$this->color."".$this->model;

    }

}
 $mycar =new car("red","green");
 $mycar->message();

echo "<br>";

echo(rand()); // random number ekak ganna 

echo "<br>";

//PHP Magic Constants ⭐
echo __LINE__ . "<br>";
echo __FILE__ . "<br>";
echo __DIR__;

echo "<br>";

//define constant
define("MSG", "Hello");

function testt() {
    echo MSG;
}

testt();
//cost constant 
const NAME = "Thulakshana";
echo NAME;
echo "<br>";

if(5<=>8){
    echo "true";
}else{
    echo "false";
}
echo "<br>";

$flavor="red";
switch($flavor){
    case "red":
        echo "red is the bese";
        break;
    case "blue":
        echo "blue is the best";
        break;
    default:
        echo "none";
}

echo "<br>";

//switch eka meheme use karannath puluwan
$color="yellow";
$text=match($color){
    "red"=>"your fav color red",
    "yellow"=>"your fav color yellow",
    default=>"none",

};
echo $text;
echo "<br>";

//foreach loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

//function ekakata values godak ganna widiha
function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
      $n += $x[$i];
    }
    return $n;
  }
  
  $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
  echo $a;

  echo "<br>";

  //$_server superglobal
  echo $_SERVER['PHP_SELF']; 
  echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo $_SERVER['SERVER_PROTOCOL'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];
echo"<br>";
echo $_SERVER['REQUEST_TIME'];
echo"<br>";
echo $_SERVER['QUERY_STRING'];
echo "<br>";
echo $_SERVER['HTTP_ACCEPT'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['REMOTE_PORT'];
echo "<br>";




echo "<br>";





?>

<?php  require 'in.php'; ?> 
<?php require 'inn.php'; ?>
<?php require 'innn.php';?>


<?php require 'form1.php';?>

<?php require 'advance.php';?>

<?php require 'file1.php';?>


<?php require 'upload.php';?>

<?php require 'cookie.php';?>



</body>
</html>