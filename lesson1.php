<?php
//Introduction to php
//PHP is a widely-used, open source scripting language
//PHP scripts are executed on the server
//PHP files can contain text, HTML, CSS, Javascript and PHP code
//php code is executed on the server, and the result is returned to the browser as
//PHP files have extension ".php"
echo "hello World";
echo "<h1> Hello World<h1>";
//echo: print content in browser
//hello World; the content to be printed in the browser
//; : means end of php statement or instructions

//VARIABLES IN PHP
//a container for storing data
$myname = "John Doe <br>";
echo $myname;
$company1 = "Dell <br>";
$company2 = "Ubisoft <br>";
$company3 = "Nutella <br>";
echo $company1;
echo $company2;
echo $company3;

//Concatenation/ Joining
//joining a variable and variable: use the dot operator
echo $company1.$company2;
$car1= "Benz ";
$car2 = "Toyota";
echo $car1." ".$car2."<br>" ;

//joining a string and a variable
echo "I love $car1 <br>";
echo "I Love $car1 and $car2 <br>";

?>