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
    <title>Tabel pacienti</title>
</head>
<body>
    <div class="container my-5">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nume</th>
      <th scope="col">Prenume</th>
      <th scope="col">CNP</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Varsta</th>
      <th scope="col">Data</th>
      <th scope="col">Ora</th>
      <th scope="col">Actiuni</th>
    </tr>
  </thead>
  <?php
  $sql = "SELECT * FROM `users`";
  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $idpatient=$row['idpatient'];
        $name=$row['name'];
        $surname=$row['surname'];
        $cnp=$row['cnp'];
        $email=$row['email'];
        $phone=$row['phone'];
        $age=$row['age'];
        $date=$row['date'];
        $time=$row['time'];
        echo '<tr>
        <th scope="row">'.$idpatient.'</th>
        <td>'.$name.'</td>
        <td>'.$surname.'</td>
        <td>'.$cnp.'</td>
        <td>'.$email.'</td>
        <td>'.$phone.'</td>
        <td>'.$age.'</td>
        <td>'.$date.'</td>
        <td>'.$time.'</td>
        <td>
        <button class="btn btn-primary"><a href="edit.php?updatepacient='.$idpatient.'" class="text-light">Editeaza</a></button>
        <button class="btn btn-danger"><a href="delete.php?idpacient='.$idpatient.'" class="text-light">Sterge</a></button>
        <button class="btn btn-secondary"><a href="trimite.php?idpatient='.$idpatient.'" class="text-light">Trimite</a></button>
        </td>
        </tr>';
    }
  }
  ?>
  <tbody>
  </tbody>
</table>
        <button class = "btn btn-secondary my-5"><a href="user.php" class="text-light">Adauga</button>
    </div>
</body>
</html>