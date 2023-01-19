<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "login");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $query = "SELECT * FROM account WHERE email='$email' AND password='$password'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $doctor = $row['doctor'];
        $_SESSION['email'] = $email;
        $_SESSION['doctor'] = $doctor;
        if($doctor === "yes"){
            header('location:doctorpage.php');
        }
        else {
            header('location:display.php');
        }
    } else {
        echo "Incorrect credentials. Please try again.";
    }
}
?>
<form method="post" action="login.php">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" name="login" value="Login">
    <button><a href="signup.php">Sign Up</a></button>
</form>