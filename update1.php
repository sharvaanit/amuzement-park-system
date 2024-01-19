<?php
include 'connect.php';
$staff_id=$_GET['updateid'];
$sql="Select * from `ridemanagerr` where staff_id='$staff_id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$staff_id=$row['staff_id'];
$rideid=$row['rideid'];

if (isset($_POST['submit']))
{
  $staff_id=$_POST['ridemanager'];
  $rideid=$_POST['rideid'];
  

 $sql="update `ridemanagerr` set staff_id='$staff_id',rideid='$rideid' where staff_id='$staff_id'";
 $result=mysqli_query($con,$sql);
 if ($result)
 {
  header("location:display.php");
} 
 { 
   die(mysqli_error($con));
}

}
?>



<!DOCTYPE HTML>
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
         <meta charset="utf-8">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
 

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.glow
{
  text-shadow: 2px 2px 5px red;

}
img{

}
.h {
width="100%";
height:150px;
}
.btn-group .button {
  background-color:violet; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: right;
  margin-bottom:50px;
}

.btn-group .button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

.btn-group .button:hover {
  background-color: indigo;
}
.lol{
margin-left:100px;
margin-bottom:50px;
}
.container {
  position: relative;
  text-align: center;
  color: white;
}
.top-left {
  position: absolute;
  top: 10px;
  left: 50px;
}
.k {
 font-size: 100px;
  color: black;
  text-align: center;
  font-family:Trirong;
  text-shadow:0px 0px 40px white,10px 10px 20px salmon,0 0 10px blue;
}

.im
{
border: 6px solid purple;
}

.hmm {
margin-left:20px;
margin-right:20px;
}
div.gallery {
 width: 200px;
  height: 200px;
  border-radius: 100px;
  background-color: white;
  animation: glow 1s infinite alternate;

}

div.gallery:hover {

}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
.box{
color:white;
border: 2px solid black;
padding:10px 20px;
background:linear-gradient(white,grey);
box-shadow:0 20px 15px rgba(32,32,32,.3);
margin-left:150px;
margin-right:150px;
}
.box input[type="text"],.box input[type="textarea"],.box input[type="number"],.box input[type="tel"],.box input[type="date"],.box input[type="datalist"]
{
    border:0;
    background:white;
    display:block;
    margin:20px auto;
border:3px ridge black;
padding: 20px 10px;
height:5px;
width:200px;
border-radius: 10px;
transition: 0.25px;
}
.box input[type="date"]:focus,.box input[type="text"]:focus,.box input[type="textarea"]:focus,.box input[type="number"]:focus,.box input[type="datalist"]:focus,.box input[type="tel"]:focus{

    width:270px;
    border-color:silver;
    background:black;
    color:white;
}
.box input[type="submit"]{
    border:0;
    background:creme;
    display:block;
    margin:20px auto;
    text-align: center;
border:3px ridge black;
padding: 14px 35px;
border-radius: 24px;
transition: 0.25px;
cursor: pointer;
}
.box input[type="submit"]:hover{
    background: lightseagreen;
}
.box input[type="reset"]{
    border:0;
    background:creme;
    display:block;
    margin:20px auto;
    text-align: center;
border:3px ridge black;
padding: 14px 35px;
border-radius: 24px;
transition: 0.25px;
cursor: pointer;
}
.box input[type="reset"]:hover{
    background: lightseagreen;
}
.loll{
  font-size:80px;
font-family:Sofia;
text-shadow:0 0 10px #FF8C00	, 0 0 5px magenta;
}
</style>
<table width="100%">
    <tr>
        <td align="Center">
            <h2 class="loll" style="margin-bottom:50px;">Funzaville</h2>
        </td>
        <td align="center">
        <div class="btn-group">
    <a href="display.php"><button type="button" class="btn btn-dark">View Staff Details(View/Update/Delete)</button></a>
</div>
    <div class="btn-group">
     <button type="button" class="btn btn-dark" dropdown-toggle data-bs-toggle="dropdown">Insert New Staff Details</button>
      <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="staff1.php">Staff</a></li>

        <li><a class="dropdown-item" href="ridemanager.php">Ride Manager</a></li>
        <li><a class="dropdown-item" href="driver.php">Driver</a></li>
      </ul>
    </div>
    


        </td>
    </tr>
</table>

<body style="background-image:linear-gradient(#89b2d8,rgb(230,163,195));">
<br>
<br>
<form method="post" autocomplete="off">

   <div class="box">
   <h2 style="color:black;"><b><u>FILL IF YOU'RE A RIDE MANAGER</u></b></h2>
                 <table width="100%" align="center">
               <tr>

                <td><h2 style="color:black;">STAFF ID:</td>
                <td><input type="number" min=1 max=1000 placeholder="Enter your Staff ID" name="ridemanager" value=<?php echo $staff_id;?>></td>
                  </h2>
                </tr>
                <tr>
                <td><h2 style="color:black;">ID OF THE RIDE YOU ARE MANAGING:</td>
                <td><input type="number" min="10" max="22" placeholder="Enter the ID of the Ride" name="rideid" value=<?php echo $rideid;?> ></td>
                  </h2>
                </tr>
                <br></br>
                 <tr width="300px" align="center"><td align="center"><input type="submit" value="Update" name="submit"></input></td>
                    <td width="300px" align="center"><input type="reset" name="reset"></input></td>
                </tr>

                </table>
                <BR></BR>

   </div>
</form>
<br></br>
