<?php
//conditional statements are used to perform different actions based on different conditions.
//To allow your code to perform diff actions based on diff variables.
//php has the following if conditional statements
//
// 1. if statements executes some code if one condition is true
//2. if...else statement - executes some code if a condition is true and another code
//if that condition is false
//3.if...elseif...else statement - executes different codes for more than two conditions
//4.switch statements - selects one of many blocks of code to be executed

//Executes code nly if it is true
//if (condition to examine){
//    code to be executed if condition is TRUE
//}
$db_first_name = "John Doe";
$user_first_name = 'John Doe';
if ($user_first_name == $db_first_name){
    echo '<p> Credentials matched. You can login...</p>';
}
$age =15;
if ($age < 18){
    echo "<h1>You cannot take alcohol. Go home and study hard</h1>";
}

//2. if...else statement - executes code if a condition is true and the other condition if false
$age =15;
if ($age < 18){
    echo "<h1>You cannot take alcohol. Go home and study hard</h1>";
}else{
    echo "<h1>Hurray, you are old enough, grab a crate</h1>";
}


//3.if...elseif...else statement - executes different codes for more than two conditions
//if (condition to examine){
//    code to be executed if condition is TRUE
//}elseif(condition){
//        code to be executed if the 1st condition is false, and this condition is true
//}elseif(condition){
//    code to be executed if the 2nd condition is false, and this condition is true
//}else{
//    code to be executed if all statements are flase
//}

$age =19;
$kenyan = false;
if ($age < 18){
    echo "<h1>You cannot take alcohol. Go home and study hard</h1>";
}elseif ($kenyan == true){
    echo "<h1>Hurray, you are old enough, grab a crate</h1>";
}else{
    echo '<h3>You are Under Age And Not Kenyan, you are kidding!!!</h3>';
}
//Assignment :
//1.using a conditional statement, check if 100 is a multiple of 2:
//if true echo "100 is a multiple of 2" else echo "100 is not a multiple of 2"
$divisor = 100;
$dividend =$divisor%2;
if ($dividend == 0){
    echo "<h4>100 is a multiple of 2</h4>";
}else{
    echo "<h4>100 is not a multiple of 2</h4>";
}


//2. write code that calculates the volume of a cylinder of height 14 and diameter 14.
//echo "This is the cylinder to use if the volume is greater than 10"
$h =14;
$d =14;
$r = $d/2;
$volume = 3.142*$r*$r*$h;
if ($volume > 10){
    echo "<h4>This is the cylinder to use if the volume is greater than 10</h4>";
}
//4.switch statements - selects one of many blocks of code to be executed
//switch syntax
//switch (n){
//    case label1:
//        code to execute if n = label1
//    break
//    case label2:
//        code to execute if n = label2
//    break
//    case label3:
//        code to execute if n = label3
//    break
//    case label4:
//        code to execute if n = label4
//    break
//    default:
//        code to be executed
//}
$favteam = 'Man-City';
switch ($favteam){
    case "Man- U";
        echo '<p style="color: red">Man-U at Position 5</p>';
    break;
    case "Liverpool";
        echo '<p style="color: darkred">Liverpool at Position 5</p>';
    break;
    case "Leicester";
        echo '<p style="color: blue">Leicester at Position 5</p>';
    break;
    case "Chelsea";
        echo '<p style="color: blue">Chelsea at Position 4</p>';
    break;
    default;
        echo "<p style='color: red'>None of the above team is my favourite</p>";

}























?>
