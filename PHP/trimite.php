<?php
include 'connect.php';

$idpatient = $_GET['idpatient'];
$sql = "SELECT name, surname, date, time FROM users WHERE idpatient = '$idpatient'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$surname = $row['surname'];
$date = $row['date'];
$time = $row['time'];
$sql = "INSERT INTO doctorpacients (patientname, patientsurname, date, time) VALUES ('$name', '$surname', '$date', '$time')";
if (mysqli_query($con, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($con);
}
mysqli_close($con);
?>