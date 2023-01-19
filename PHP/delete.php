<?php
include 'connect.php';
if (isset($_GET['idpacient'])){
    $id=$_GET['idpacient'];
    $sql = "DELETE FROM users WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if ($result){
        header('location:display.php');
    } else{
        die(mysqli_error($con));
    }
}
?>