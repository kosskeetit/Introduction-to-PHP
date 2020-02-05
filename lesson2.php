<?php
//php Data Tags
//variables can store diff types of data that do diff things
//php supports the following data types
//1.strings
//2.integers
//3.float
//4,boolean
//5.Arrays
//6.Objects
//7.Null
//8.Resources

//STRINGS
//A sequence of characters in double or single quotes
//eg "hello world", 'hello world'
//rules that govern names for variables

//A Variable should starts with the$ sign, followed by the name of the variable
//A Variable name must start with a letter or the underscore character
//A Variable name cannot start with a number
//A Variable name can only contain alpha-numeric characters and underscores (A-Z, 0-9)
//Variables names are case sensitive ($age and $AGE are two different variables)

$x = "PhpPhpPhpPhpPhpPhpPhpPhpPhpPhp";
$y = "Kotlin";
$Y = "Android";
var_dump($x);
var_dump($y);
var_dump($Y);
echo "<br>";

//what if you want to know how many characters makes up a string?
//up a string? use: Strlen() function
//function: code that helps you do repetitive tasks
echo strlen($x);
echo "<br>";
echo strlen("John Doe");
echo "<br>";

//count number of words in a string: str_word_count() function
echo str_word_count("I love coding in php");
echo "<br>";
$num_words = str_word_count("Coding is Awesome");
echo $num_words;
echo "<br>";

//Search for a text within a String: strpos()
$position_for_world = strpos("Hello world", "world");
echo $position_for_world;
echo "<br>";

//Replace Text Within a String: use str_replace()
echo str_replace("world","Dunia","Hello world");
echo "<br>";


//2.integers
//Numbers that are non Decimal
//must atleast have one digit
$age = 21;
var_dump($age);
echo "<br>";

//3.Float
//is a no with a decimal point
$cup_volume = 23.34;
var_dump($cup_volume);
echo "<br>";


//4.boolean :true, false
//oftenly used in conditional statements
$a = true;
$b =false;
echo "<br>";
echo 3 < 5;//Returns 1; true
echo "<br>";
echo 3 > 5;// Returns on the browser, it means false

