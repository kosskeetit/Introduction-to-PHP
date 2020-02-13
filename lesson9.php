<?php
//PHP $_POST is a PHP superglobal variable which is used to collect form data after submitting n HTML form
//with method = "post"
//$_POST is also widely used to pass variables
//receive form data using POST requests/$_POST()superglobal
//receive data
//declare variables to store sent data
$name = '';
$email = "";

//Check the server request method: GET or POST: use $_SERVER
if($_SERVER['REQUEST_METHOD'] == 'POST') {
//    if method is post, grab data using the $_POST superglobal
    $name = $_POST['jina'];
    $email = $_POST['arafa'];
    $error = false;
    if (empty($name)) {
        $error = true;
        echo '<p style="color: red">Please fill in your name</p>';
    }
    if (empty($email)) {
        $error = true;
        echo '<p style="color: red">Please fill in your email</p>';
    } else {
        $name = safisha($name);
        $email = safisha($email);
        echo "<p style='color: green'>Your name is $name and email is $email </p><br>";

    }
//    print the data
//    if (!$error) {
//        echo "<p style='color: green'>Your name is $name and email is $email </p><br>";
    }
//}
//Validating /cleaning data
//1.To remove unwanted space use : trial()
//2.To remove backslashes use striplashes()

//create a function to clean data

function safisha($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <h3>Fill Form...</h3>
    <input type="text" name="jina" placeholder="Enter name..."><br>
    <input type="email" name="arafa" placeholder="Enter email..."><br>
    <button type="submit">Send</button>
<!--    action: location that the data will be sent to in the server, value: lesson9.php-->
<!--    method: request method to be used to send data to the server-->
<!--    Name: is the key for a value entered in the form:-->
<!--    this will result to an associative array to this format-->
<!--    --><?php
//        $_POST = array("jina"=>"John","arafa"=>"John@gmail.com");
//    ?>
</form>
<!--$_GET: Used to collect data from just like $_POST-->
<!--collect data sent via the URL-->
<?php
//grabbing data sent via $_GET
$the_name = $_GET['name'];
$the_age = $_GET['age'];
$the_country = $_GET['country'];
echo "Your details: Name: $the_name, Age: $the_age, <br>";
?>
<a href="lesson9.php?name=LeRoy&age=23&country=Kenya">Send Details</a>