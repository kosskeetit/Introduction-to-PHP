<?php
//Functions
//besides the built-in PHP functions, it is possible to create your own functions.
//a function is a block of statements that can be used repeatedly in a program./ does a specific job
//a function will not execute automatically when as page loads.
//a function will be executed by a call to the function.
//Syntax

//function function_name(){
////    code to execute ONLY WHEN THIS FUNCTION IS CALLED/USED
//}
//Function creation/declaration
function greetings(){
    echo 'Hello World';
}
//Using a function/ calling a function;USE THE FUNCTION NAME FOLLOWED BY PARENTHESIS
//YOU MUST CALL THE FUNCTION FOR IT TO WORK
greetings();
echo '<br>';

function greeting1(){
    echo "Chapatti <br>";
}
greeting1();
function greetings2($name,$age){
    echo "Rada ".$name.' You are '.$age.' <br>';
}
greetings2(' Johnte',18);
//greetings2('Johnte','18');//call these functions with enough arguments
//functions with default arguments
function greetings3 ($name = 'PHP',$country='Kenya'){
    echo 'I am a '.$name.' developer from '.$country.'<br>';
}
greetings3();
greetings3('WEB');
greetings3('WEB','UK');

//Functions that returns value
function greetings4 ($name){
    $get_name = $name;
    Return $get_name;
}
$found_name = greetings4('Johnte');
echo $found_name.'<br>';

function areaofacircle($radius){
    $pie = 3.142;
    $area = $pie *$radius *$radius;
    return $area;
}
$cr1 = 7;
$cr2 = 14;
$areaC1 = areaofacircle($cr1);
$areaC2 = areaofacircle($cr2);
echo $areaC1.'<br>';
echo $areaC2. '<br>';

//Functions that takes an array as an arguement
function loopArray($array_name, $myforeach=true){
    if ($myforeach){
//        if true run foreach loop
        echo 'FOR EACH LOOP <br>';
            foreach ($array_name as $item) {
                echo $item . '<br>';
            }
    }else{
//        if false run for loop
        echo "FOR LOOP <br>";
        for ($s =0;$s < $length; $s++){
            echo "$array_name[$s] <br>";
        }
    }
//    get the length of the array
//    For loop
    for ($s =0;$s < $length; $s++){
        echo "$array_name[$s] <br>";
    }
//    FOREACH LOOP
    foreach ($array_name as $item){
        echo $item.'<br>';
    }
}
$games = array("GTA","NFS","FIFA","PES","MORTAL COMBAT","JACK RYAN","ANGRY BIRDS","CANDY CRASH");
loopArray($games);
loopArray($games,$myforeach=true);

Assignment:
//write a function that calculates the area of circle and prints the result with unit of measurement
//chosen. this function should have option for unit of measurements.
function areaofacircle2($radius,$units='cm'){
    $pie = 3.142;
    $area = $pie *$radius *$radius;
    $unit =' Sq '.$units;
    return $area.$unit;
}
$cr1 = 7;
$cr2 = 14;
$cr3 = 21;
$areacr1=areaofacircle2($cr1,'M');
$areacr2=areaofacircle2($cr2,'feet');
$areacr3=areaofacircle2($cr3);
echo $areacr1.'<br>';
echo $areacr2.'<br>';
echo $areacr3.'<br>';




















































?>
