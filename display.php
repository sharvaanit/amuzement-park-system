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
        <h1>Staff Details</h1>

        <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Staff ID</th>
      <th scope="col">Name</th>
      <th scope="col">Job</th>
      <th scope="col">Experience</th>
    </tr>
  </thead>
  <tbody>
      <?php
      error_reporting(0);
       $sql="Select * from `staff`";
       $result=mysqli_query($con,$sql);
       if ($result)
       {
           while ($row=mysqli_fetch_assoc($result))
           {
                $Staff_id=$row['Staff_id'];
                $name=$row['name'];
                $job=$row['job'];
                $experience=$row['experience'];
                echo ' <tr>
                <th scope="row">'.$Staff_id.'</th>
                <td>'.$name.'</td>
                <td>'.$job.'</td>
                <td>'.$experience.'</td>
                <td>
                <a href="update.php?updateid='.$Staff_id.'"><button class="btn btn-primary">Update</button></a>
                <a href="delete.php?deleteid='.$Staff_id.'"> <button class="btn btn-danger">Deleting</button></a>
               
    </td>
              </tr>';
           }
          
       }
      ?>
    
  </tbody>
</table>
<br>
<br>
<h1>Driver</h1>

<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">staffid</th>
      <th scope="col">Type of vehicle</th>
      <th scope="col">License number</th>
    </tr>
  </thead>
  <tbody>
      <?php
      error_reporting(0);
       $sql="Select * from `driver`";
       $result=mysqli_query($con,$sql);
       if ($result)
       {
           while ($row=mysqli_fetch_assoc($result))
           {
                $staffid=$row['staffid'];
                $vehicle=$row['vehicle'];
                $licenseno=$row['licenseno'];
                echo ' <tr>
                <th scope="row">'.$staffid.'</th>
                <td>'.$vehicle.'</td>
                <td>'.$licenseno.'</td>
                <td>
                <a href="update2.php?updateid='.$licenseno.'"><button class="btn btn-primary">Update</button></a>
                <a href="deletedriver.php?deleteid='.$licenseno.'"><button class="btn btn-danger">Deleting</button></a>
               
    </td>
              </tr>';
           }
          
       }
      
      ?>
       </tbody>
</table>
    
  <br>
  <br>
  <h1>Ride Manager</h1>
  <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">staff_id</th>
      <th scope="col">rideid</th>
    </tr>
  </thead>
  <tbody>
      <?php
      error_reporting(0);
       $sql="Select * from `ridemanagerr`";
       $result=mysqli_query($con,$sql);
       if ($result)
       {
           while ($row=mysqli_fetch_assoc($result))
           {
                $staff_id=$row['staff_id'];
                $rideid=$row['rideid'];
                echo '<tr>
                <th scope="row">'.$staff_id.'</th>
                <td>'.$rideid.'</td>
                <td>
                <a href="update1.php?updateid='.$staff_id.'"><button class="btn btn-primary">Update</button></a>
        <a href="deleteridemanager.php?deleteid='.$staff_id.'"><button class="btn btn-danger">Deleting</button></a>
    </td>
              </tr>';
           }
          
       }
      
      ?>
       </tbody>
</table>
    <br>
    <h1>Salary</h1>

    <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Salary</th>
      <th scope="col">Job</th>
    </tr>
  </thead>
  <tbody>
      <?php
      error_reporting(0);
       $sql="Select * from `staff_salary`";
       $result=mysqli_query($con,$sql);
       if ($result)
       {
           while ($row=mysqli_fetch_assoc($result))
           {
                $salary=$row['salary'];
                $job=$row['job'];
                echo '<tr>
                <th scope="row">'.$salary.'</th>
                <td>'.$job.'</td>
              </tr>';
           }
          
       }
      
      ?>
       </tbody>
</table>
    
  </div>
</body>
</html>