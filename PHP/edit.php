<?php
include 'connect.php';
$id=$_GET['updatepacient'];
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $cnp=$_POST['cnp'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $sex=$_POST['sex'];
    $address=$_POST['address'];
    $motive=$_POST['motive'];
    $scale=$_POST['scale'];
    $observation=$_POST['observation'];
    $date=$_POST['date'];
    $time=$_POST['time'];

    $sql="UPDATE users SET id='$id', name='$name', surname='$surname', cnp='$cnp',email='$email', age='$age', sex='$sex', address='$address', motive='$motive', scale='$scale', observation='$observation', date='$date', time='$time'";
    $result=mysqli_query($con, $sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Modificare user</title>
  </head>
  <body>
    <div class="container my-5">
  <form method="post">
  <div class="form-group">
    <label>Nume</label>
    <input type="text" class="form-control" placeholder="Numele de familie al pacientului" name="name">
  </div>
  <div class="form-group">
    <label>Prenume</label>
    <input type="text" class="form-control" placeholder="Prenumele pacientului" name="surname">
  </div>
  <div class="form-group">
    <label>CNP</label>
    <input type="text" class="form-control" placeholder="Codul numeric personal al pacientului" name="cnp">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Email-ul pacientului" name="email">
  </div>
  <div class="form-group">
    <label>Varsta</label>
    <input type="number" class="form-control" placeholder="Varsta pacientului" name="age">
  </div>
  <div class="form-group" mb-3>
    <label>Sex</label>
    <input type="radio" name="sex" value="Male"/>M
    <input type="radio" name="sex" value="Female"/>F
  </div>
  <div class="form-group">
    <label>Adresa</label>
    <input type="text" class="form-control" placeholder="Adresa pacientului" name="address">
  </div>
  <div class="form-group">
    <label>Motivul prezentarii</label>
    <input type="text" class="form-control" name="motive">
  </div>
  <div class="form-group">
    <label>Scala analog-vizuala a durerii</label>
    <input type="number" class="form-control" name="scale">
  </div>
  <div class="form-group">
    <label>Observatii</label>
    <input type="text" class="form-control" name="observation">
  </div>
  <div class="form-group">
    <label>Data</label>
    <input type="date" class="form-control" name="date">
  </div>
  <div class="form-group">
    <label>Ora</label>
    <input type="time" class="form-control" name="time">
  </div>
  <button type="salveaza" class="btn btn-primary" name="submit">Salveaz??</button>
  </div>
</form>
  </body>
</html>