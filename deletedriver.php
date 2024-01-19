<?php
include 'connect.php';
if (isset($_GET['deleteid']))
{
    $licenseno=$_GET['deleteid'];
    $sql="delete from `driver` where licenseno=$licenseno";
    $result=mysqli_query($con,$sql);
    if ($result)
    {
        echo "Deleted successfully";
        header("location:display.php");
    }
    else
    {
        die(mysqli_error($con));

    }

}

?>