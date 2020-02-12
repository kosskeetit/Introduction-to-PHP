<?php
//An array stores multiple values in one single variable:
//an array is a special variable, which can hold mor than one value ata time
$fruit1 = "Mango";
$fruit2 = "Apple";
$fruit3 = "Orange";
$fruit4 = "Avocado";
$fruit5 = "Pineapple";
$fruit6 = "Water melon";
$fruit7 = "Guavas";
//Create an array in PHP
//In PHP, the array() function is used to create an array:
$fruits = array('Mango','Apple','Orange','Avocado','Pineapple','Water melon','Guavas');
//echo $fruits;
//count number of items in an array: use count() function
$num_items = count($fruits);
echo $num_items. '<br>';


//accessing array items: use square bracket[] notation with index no inside
echo $fruits[0].'<br>';
echo $fruits[1].'<br>';
echo $fruits[2].'<br>';
echo $fruits[3].'<br>';
echo $fruits[4].'<br>';
echo $fruits[5].'<br>';
echo $fruits[6].'<br>';
echo 'My favourite fruit is '.$fruits[0].' and '.$fruits[3].'<br>';


//looping through indexed array: use foreach
foreach ($fruits as $matunda){
    echo $matunda.'<br>';
}
//for (initial value;text value;increment value){
//    code to be executed
//}
for ($x = 0; $x < count($fruits); $x++){
//    echo out each item by accessing them using index numbers
    echo $fruits[$x].'<br>';
}
$num_items = count($fruits);
for ($x = 0; $x < count($fruits); $x++) {
//    echo out each item by accessing them using index numbers
    echo $fruits[$x] . '<br>';
}
//Associative array:1. -populating directly
$geeks_fruits = array("Craig"=>"Mango","Steve"=>"Apple","Victor"=>"Mapera","Masoud"=>"Grapes");
$team_color = array("Chelsea"=>"Blue","Man-U"=>"Red","Tottenham"=>"white","Man-city"=>"Light blue");

//Associative array:2 -populating one by one
$country_car_brand['Kenya'] ='Nyayo';
$country_car_brand['Germany'] = array('Benz','BMW','VW');
$country_car_brand['US'] ='Ford';
$country_car_brand['Japan'] = array ('Mitsubishi', 'Toyota');
$country_car_brand['China'] ='Hyundai';

//Accessing associative array item:Use the keys
echo $country_car_brand['Kenya']."<br>";
//foreach
foreach ($country_car_brand['Germany'] as $magari){
    echo $magari."<br>";
}
//for loop
$car_count = count($country_car_brand['Germany']);
for ($i = 0; $i < $car_count; $i++){
    echo $country_car_brand['Germany'][$i].'<br>';
}
$car_count = count($country_car_brand['Germany']);
$cars_found_germany = $country_car_brand['Germany'];
for ($i = 0; $i < $car_count; $i++){
    echo $cars_found_germany[$i].'<br>';
}






















?>