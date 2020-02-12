<?php
//loops:
//we use loops to execute a block of code again and again as long as a certain condition is
//true


//in PHP we have the following loop types:
//1.while- loops through a block of code as long as the specified condition is true
// syntax
//while (condition){
//    code to execute
//}
$count = 0;
while ($count < 20){//First checks the condition.loops ONLY if condition is true
    if ($count==0){
        echo  $count. " IS NOT DIVISIBLE BY THREE <br>";

    }elseif ($count % 3 == 0){
        echo $count. ' DIVISIBLE BY THREE <br>';

    }else{
        echo $count. " IS NOT DIVISIBLE BY THREE <br>";
    }
    $count ++;
}
//$count: initializes the loop counter and sets the start value
//$count < 20: continue the loop as long as $count is less than 20
//$count ++: increases the loop counter value for each loop/iteration


//2.do...while - loops through a block of code once, and then repeats the loop as long as the
// specified condition is true
//syntax
//do{
//    code to execute;
//}while (condition is true)


$x = 0;
do{
    echo '<div style="border: 2px solid red">
                <p>$x</p>
        </div>';
    $x ++;
}while ($x < 10);


//for - loops through a block of code a specified number of times
//Syntax
//for (initial value;text value;increment value){
//    code to be executed
//}
//initial value: Initialize the loop counter value: determines the starting of a loop
//test value: evaluated for each loop iteration. if it is evaluates a TRUE, the loop
// continues if it evaluates to FALSE, the loop ends.
//increment value: increases the loop counter value
for ($x = 0;$x < 10;$x+=2){
    echo "<span>Value : $x</span> <br>";
}
$no = 0;
for ($no = 0;$no<100; $no++){
    if ($no==0){
        echo $no.' Not Divisible By 3 or 5 <br>';
    }elseif ($no%15==0){
        echo $no.' FeesBars <br>';
    }elseif ($no%5 == 0){
        echo $no.' Bars <br>';
    }elseif ($no%3 ==0){
        echo $no.' Fees Bars <br>';
    }
}
Assignment:
//Using a for loop, loop fromm 0-100 if a number is a multiple of 3 echo "FIZZ".
//If a number is a multiple of 5 echo "BUZZ". if a number is a multiple of both 3 and 5
//echo "FIZZBUZZ". Otherwise echo the number
//Soln 1 to fizzbuzz
$count_no= 0;
for ($count_no = 0;$count_no<100;$count_no++){
    if ($count_no==0){
        echo $count_no.' Not Divisible By 3 Or 5 <br>';
    }
    if ($count_no%15==0){
        echo $count_no.' FIZZBUZZ <br>';
    }elseif ($count_no%5 == 0) {
        echo $count_no . ' BUZZ <br>';
    }elseif ($count_no%3==0){
    echo $count_no.' FIZZ <br>';
    }
}
//Soln 2 to fizzbars
for ($count_no = 0;$count_no<100;$count_no++) {
//    $count_no : start of the loop
//    $count_no < 100 : test condition
//    $count_no++ : Increament number
    if ($count_no==0){
        echo $count_no.' Not Divisible By 3 or 5 <br>';
}elseif ($count_no%5 ==0 and $count_no%3==0){
        echo $count_no.' FIZZBUZZ <br>';
    }elseif ($count_no%5 == 0) {
        echo $count_no . ' BUZZ <br>';
    }elseif ($count_no%3==0){
        echo $count_no.' FIZZ <br>';
    }
}

//foreach - loops through a block of code for each element in an array




























?>
