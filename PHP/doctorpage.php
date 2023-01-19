<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Consultatii</title>
</head>
<body>
    <div class="container my-5">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nume Pacient</th>
      <th scope="col">Prenume Pacient</th>
      <th scope="col">Nume Doctor</th>
      <th scope="col">Data</th>
      <th scope="col">Ora</th>
    </tr>
  </thead>
  <?php
  $sql = "SELECT * FROM `doctorpacients`";
  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $pname=$row['patientname'];
        $psurname=$row['patientsurname'];
        $dname=$row['doctorname'];
        $date=$row['date'];
        $time=$row['time'];
        echo '<tr>
        <td>'.$pname.'</td>
        <td>'.$psurname.'</td>
        <td>'.$dname.'</td>
        <td>'.$date.'</td>
        <td>'.$time.'</td>
        <td>
        <button class="btn btn-primary">Trimite</button>
        </td>
        </tr>';
    }
  }
  ?>
  <tbody>
  </tbody>
</table>
    </div>
</body>
</html>