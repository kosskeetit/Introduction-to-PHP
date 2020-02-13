<?php
//COMPLETE PHP FORM
//Algorithm
//1.create variables that will store received data
$username = $first_name = $last_name = $email = $Password1 = $password2 = $gender = '';
//2.create variables that will store error message
$username_err = $first_name_err = $last_name_err = $email_err = $Password1_err = $password2_err = $gender_err = '';
//3.check if the data is empty
//    3.1 check the request method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    3.2 clean the data
    function safisha($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = safisha($_POST['username']);
    $first_name = safisha($_POST['first_name']);
    $last_name = safisha($_POST['last_name']);
    $email = safisha($_POST['email']);
    $password1 = safisha($_POST['pass1']);
    $password2 = safisha($_POST['pass2']);
    $gender = safisha($_POST['gender']);
//    3.3 check if data is empty
//    if true assign error messages to respective error variables
    if (empty($username)) {
        $username_err = "Please fill in your username";
    }
    if (empty($first_name)) {
        $first_name_err = "Please fill in your first name";
    }
    if (empty($last_name)) {
        $last_name_err = "Please fill in your last name";
    }
    if (empty($email_err)) {
        $email_err = "Please fill in your email";
    }
    if (empty($password1_err)) {
        $password1_err = "Please fill in your Password";
    }
    if (empty($Password2_err)) {
        $password2_err = "Please fill in your confirm password";
    }
//    check of password1 and password2 are matching
    if ($Password1 != $password2) {
        $password1_err = "Your password did not match";
    }
    if (empty($gender)) {
        $gender_err = "Please select your gender";
//4.display the data: SOON store data in a database

    }
}
    echo "DETAILS:";


?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
    <fieldset>
        <h3>Register here...</h3>
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
<!--        show error if theres one-->
        <span class="error" style="color: red"><?php echo $username_err?></span> <br>

        <label for="">First Name</label><br>
        <input type="text" name="first_name"><br>
        <span class="error" style="color: red"><?php echo $first_name_err?></span> <br>

        <label for="">Last Name</label><br>
        <input type="text" name="last_name"><br>
        <span class="error" style="color: red"><?php echo $last_name_err?></span> <br>

        <label for="">Email</label><br>
        <input type="email" name="email"><br>
        <span class="error" style="color: red"><?php echo $email_err?></span> <br>

        <label for="">Password</label><br>
        <input type="password" name="pass1"><br>
        <span class="error" style="color: red"><?php echo $password1_err?></span> <br>


        <label for="">Confirm password</label><br>
        <input type="password" name="pass2"><br>
        <span class="error" style="color: red"><?php echo $password2_err?></span> <br>

        Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="FEMALE">female
        <input type="radio" name="gender" value="male">Others
        <span class="error" style="color: red"><?php echo $gender_err?></span> <br>

        <button type="submit">Submit</button>

    </fieldset>
</form>
<?php
echo $username."<br>";
echo $first_name."<br>";
echo $last_name."<br>";
echo $email."<br>";
echo $password1."<br>";
echo $password2."<br>";
echo $gender."<br>";
?>