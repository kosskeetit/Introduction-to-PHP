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
$a **=2;
echo $a;
echo '<br>';

//3.comparison ops
//used to compare values
//COMPARISON OPS RETURN A BOOLEAN DATA TYPES: TRUE, FALSE
//1. == (equals to)
echo "<br>";
$S = 2;
$t = 3;
$j = 2;
$answer = $s == $t;
var_dump($answer);
echo "<br>";
$db_username = 'Tommy Shelby';
$db_password = 'ssap4321';
//data from user
$user_username = 'kikijo2015';
$user_password = 'ssap4321';

$check = $db_username == $user_username;
var_dump($check);
echo '<br>';


//2.= = =: Identical : returns true if oe variable is equal to another variable and
// these 2 variables are of the same data type
$check = $db_password === $user_password;
var_dump($check);
echo '<br>';


//3. '!=': not equal to: return true if two variables are not equal
$check = $db_username != $user_username;
var_dump($check);
echo '<br>';

//4. '!==': not identical: returns true if two variables are not identical
$check = $db_username !== $user_username;
var_dump($check);
echo '<br>';


//5. > : greater than: return true if a value is greater than the other value
$myname = 'Kosskeetit';
$yourname = 'Tommy Shelby';
$result = strlen($myname) > strlen($yourname);
var_dump($result);
echo '<br>';

//6. > : less than: return true if a value is less than the other value
$myname = 'Kosskeetit';
$yourname = 'Tommy Shelby';
$result = strlen($myname) < strlen($yourname);
var_dump($result);
echo '<br>';


//7. > : greater than or equals to: return true if a value is greater than or equals the other value
$myname = 'Kosskeetit';
$yourname = 'Tommy Shelby';
$result = strlen($myname) >= strlen($yourname);
var_dump($result);
echo '<br>';


//7. > : less than or equals to: return true if a value is less than or equals the other value
$myname = 'Kosskeetit';
$yourname = 'Tommy Shelby';
$result = strlen($myname) >= strlen($yourname);
var_dump($result);
echo '<br>';


//4.logical ops
//Used to combine conditional statements
//1. 'and' : returns true if two operations are true
$x = 100;
$y = 200;
if ($x == 100 and $y == 200){
    echo '<h1>It is true $x is equal to 100 and $y is equal 200 </h1>';
}


//2. 'or' : returns true if either one of two operations is true
$x = 100;
$y = 200;
if ($x == 100 or $y != 200){
    echo '<h1>It is true $x is equal to 100 and $y is not equal 100 </h1>';
}
$x = 100;
$y = 200;
if ($x == 100 || $y != 200){
    echo '<h1>It is true $x is equal to 100 and $y is not equal 100 </h1>';
}


//3. '!' not : return true if a variable is false
$check = !($x == 100 and $y == 200);
var_dump($check);












?>
