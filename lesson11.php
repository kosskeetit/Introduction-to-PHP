<?php
//In development, we often need to store data collected from users of our systems
//MySQL is the database system used for both big and small businesses and it uses the SQL
//(STRUCTURED QUERY LANGUAGE) to interact with data
//A DB is made up of related tables
//
//before using the database you have to connect to it by providing the following info
//    1. hostname
//    2. username
//    3.password
//    4. database name
//
//PHP has helper functions that will make database interactions easy
//>CONNECTING TO THE DATABASE
//Credentials to connecting to a db
$hostname = 'localhost';
$username = 'root';
$password = '';
$databasename = 'demo1';
//To connect to a database use the php function called mysqli_connect()
//mysqli function returns a boolean datatype
function maxy($num1,$num2){
    if ($num1 > $num2) {
        return $num1;
    } else {
        return $num2;
    }
}
$results = maxy(3,4);
echo $results.'<br>';

$connection = mysqli_connect($hostname,$username,$password,$databasename);
//check connecton
if ($connection == false){
    echo "connection not successful <br>";
    echo  mysqli_connect_error()."<br>";
//    stop connection if unsuccessful
    die('ERROR: '.mysqli_connect_error());
}

//Inserting data into the table
$sql = "INSERT INTO `users`(`ID`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES (NULL,'Johnte254','John','Maina','john@gmail.com','pass1234','Male')";
if (mysqli_query($connection,$sql)){
    echo "Data inserted successfully <br>";
}else{
    echo "Data not inserted".mysqli_error($connection);
}




////create a database
//$sql = "CREATE DATABASE demo1";//request/ query to the DB sys
////make the request/execute: mysqli_query
//if (mysqli_query($connection,$sql)){
//    echo "database created successfully <br>";
//}else{
//    echo "ERROR: could not execute $sql".mysqli_error($connection);
//}









?>
