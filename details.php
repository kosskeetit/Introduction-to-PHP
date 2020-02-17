<?php

//fetch use4r from db using the received id($user_id)
require 'header.php';
require 'config.php';

//grab id: use &_GET
if (isset($_GET['id'])){
    $id = $_GET['id'];

//    fetch data from db using id
    $sql = "SELECT `ID`, `username`, `firstname`, `lastname`, `email`, `password`, `gender` FROM `users` WHERE id='$id'";
    $user = mysqli_query($connection,$sql);
//    create associative array to split data into column title and actual values: use msqli_fetch()
    $row = mysqli_fetch_array($user);

    echo "<div class='card'>";
        echo $row['username']. '<br>';
        echo $row['firstname']. '<br>';
        echo $row['lastname']. '<br>';
        echo $row['email']. '<br>';
        echo $row['gender']. '<br>';
    echo "</div>";




}



require 'footer.php'






?>
