<?php
//Php Operators
//used to perform operations on variables and values
//php has the following operators
//1.Arithmetic operators
//2.Assignment ops
//3.comparison ops
//4.logical ops


//1.Arithmetic ops
//+,-,/,*,%,**


//+; Addition
$x = 23;
$y = 234;
$sum = $x + $y;
echo 'The sum of $x and $y is'." ".$sum."<br>";

//-; subtraction
$x = 23;
$y = 234;
$Sub = $y-$x;
echo 'The sub of 234 and 23 is'." ".$Sub."<br>";

//*; multiplication
$x = 23;
$y = 234;
$Mult = $y*$x;
echo 'The mult of 234 and 23 is'." ".$Mult."<br>";

//;division(/)
$x = 23;
$y = 234;
$Div = $y/$x;
echo 'The div of 234 by 23 is'." ".$Div."<br>";

//%; Modulus
$x = 3;
$y = 2;
$mod = $x%$y;
echo 'The mult of 3 and 2 is'." ".$mod."<br>";

//**; Exponential
//to power sth
echo 2**3;
echo "<br>";



//2.Assignment ops
//+: Addition

//used to write a value to a variable
$car = "Benz";
$i =12;
$f =12.12;
//assignment ops with other arithmetic ops
$s = 30;
echo $i + $s;
echo "<br>";
$i = $i + $s;
echo "<br>";
$i += $s;
echo $i;
echo "<br>";
$a = 100;
$b = 200;
$a +=100;
echo $a;
echo '<br>';

//-: Subtraction
$a = 100;
$b = 200;
$a -=50;
echo $a;
echo '<br>';

//*: Multiplication
$a = 100;
$b = 200;
$a *=100;
echo $a;
echo '<br>';

//Division(/)
$a = 100;
$b = 200;
$a /=100;
echo $a;
echo '<br>';

//%: Modulus
$a = 100;
$b = 200;
$a %=30;
echo $a;
echo '<br>';

//**: Exponential
$a = 100;
$b = 200;
$a **=100;
echo $a;
echo '<br>';















?>
