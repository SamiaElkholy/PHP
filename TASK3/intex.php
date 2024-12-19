<?php
#TASK1 Replace ? With Arithmetic Operators
echo 10 % 20 + 15 % 3 % 190 - 10 % 400 ."\n"; // 0

#TASK2
$a = "10";
echo + "$a" ."\n";
echo gettype(+ "$a") ."\n";

var_dump (+"$a") ."\n";
print ($a)."\n";
echo gettype(+ "$a") ."\n";



#TASK3
$a = 10;
$b = 20;
echo ($a<=>$b)."\n";

#TASK4
$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
var_dump($c > $a); // True
var_dump($a <= $b); // True
var_dump($a != $b); // True
var_dump($a <> $c); // True
var_dump($a < $c); // True
var_dump(gettype($a) === gettype($b)); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype((float) $a) !== gettype($b)); // True


#TASK5
$points = 10;
++$points;
++$points;
++$points;
echo $points ."\n";

$points--;
--$points;
--$points;
echo $points ."\n";

#TASK6
$a = "Elzero";
$b = "Web";
$c = "School";

$x = "Elzero ";
$x .= "Web"; 
$x .= " School";

echo "$a $b $c"."\n" ;
echo "{$a} {$b} {$c}"."\n" ;
echo $a ." " . $b . " " .$c ."\n";
echo $x ."\n";

#TASK7
$a = 10;
$b = 20;

echo(( $a + $b) * ($a + $b )+ $a * $a )* $a ."\n";


#TASK 8
$a = $b;
$f = @file("Not_A_File") or die("fined not found");
print_r($f) ."\n";
(@include("Not_A_File"))or die ("customar error");



