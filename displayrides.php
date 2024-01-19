<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
    <head>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<body style="background-image:linear-gradient(#89b2d8,rgb(230,163,195));">
    <div class="container">
        <button class="btn btn-primary my-5" ><a href="staff1.php"><h2 style="color:white">Add user</h2></a></button>
        <h1>Ride Details</h1>

        <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Minimum Age</th>
      <th scope="col">Ride type</th>
      <th scope="col">Ride ID</th>
    </tr>
  </thead>
  <tbody>
      <?php
      error_reporting(0);
      $sql="Select * from `rides`";
       $result=mysqli_query($con,$sql);
       if ($result)
       {
           while ($row=mysqli_fetch_assoc($result))
           {
                
                $minage=$row['minage'];
                $ridetype=$row['ridetype'];
                $rideid=$row['rideid'];
                echo ' <tr>
                <th scope="row">'.$minage.'</th>
                <td>'.$ridetype.'</td>
                <td>'.$rideid.'</td>
              </tr>';
           }
          
       }
      ?>
    
  </tbody>
</table>
<br>
<br>

  </div>
</body>
</html>