<?php
include 'connect.php';
if (isset($_GET['deleteid']))
{
    $Staff_id=$_GET['deleteid'];
    $sql="delete from `staff` where Staff_id=$Staff_id";
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