<?php
$db = mysqli_connect("localhost", "root", "", "login");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['signup'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $doctor = mysqli_real_escape_string($db, $_POST['doctor']);
    if (empty($username) || empty($email) || empty($phone) || empty($password) || empty($doctor)) {
        echo "All fields are required.";
      } else {
    $query = "SELECT * FROM account WHERE email='$email' OR phone='$phone'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0 ) {
        echo "This account is taken. Verify your credentials.";
    } else {
        if($doctor == "yes"){
            $query = "INSERT INTO account (username,email,phone,password,doctor) VALUES ('$username', '$email', '$phone', '$password', '$doctor')";
            mysqli_query($db, $query);
        }
        else {
            $query = "INSERT INTO account (username,email,phone,password,doctor) VALUES ('$username', '$email', '$phone', '$password', '$doctor')";
            mysqli_query($db, $query);
        }
        if ($result) {
            header('location:login.php');
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($db);
        }
    }
}
}
?>

<form method="post" action="signup.php">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <br>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" maxlength="10">
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <br>
    <label>Doctor?</label>
    <input type="radio" name="doctor" value="yes"/>Yes
    <input type="radio" name="doctor" value="no"/>No
    <br>
    <input type="submit" name="signup" value="Sign up">
    <button><a href="login.php">Back to login</a></button>
</form>
