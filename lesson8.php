<?php
//some predefined variables in PHP are "superglobals", which means that they are always accessible,
//regardless of scope  and you can access them from any function, class or file without having to do
//    anything special.
//The PHP superglobal variables are:

//$GLOBALS
//$_SERVER
//$_REQUEST
//$_POST
//$_GET
//$_FILES
//$_ENV
//$_COOKIE
//$_SESSION

//GLOBALS
//Super global variables are built in va riables that are always available in all scopes
//$GLOBALS is a PHP super global variable which is used to access global variables
//from anywhere in the PHP script (also from within functions or methods).
//PHP stores all global variables in an array called $GLOBALS(index)
//The index holds
$GLOBALS['name'] = "John";
$x = 75;
$y = 25;
$GLOBALS ['sum'] = $x + $y;

//_SERVER
//$_SERVER is a PHP superglobal variable which holds information about headers, paths, and script
//location.
//to find file location use element 'PHP_SELF' in $_SERVER.
$phpfilepath =$_SERVER['PHP_SELF'];
echo "FILE LOCATION:".$phpfilepath."<br>";
//get server name
$servername = $_SERVER['SERVER_NAME'];
echo "SERVERNAME:".$servername."<br>";
//get request method
$requestmethod = $_SERVER['REQUEST_METHOD'];
echo 'REQUEST METHOD:'.$requestmethod."<br>";

//$_REQUEST: We need a form for this
$get_name = $_REQUEST['jina'];
echo "$get_name <br>";
$get_email = $_REQUEST['email'];
echo "$get_email <br>";
echo "
    <form action='lesson8.php' method='post'>
    <label for=''>Username</label>
    <input type='text' name='jina'>
    <label for=''>Email</label>
    <input type='email' name='email'>
    <button type='submit'>Send data</button>
</form>
"








































?>
