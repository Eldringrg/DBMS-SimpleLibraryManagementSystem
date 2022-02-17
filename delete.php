<?php
include 'db.php';
$Id=$_GET['Id'];
$sql="DELETE FROM details WHERE Id='$Id'";
$result=mysqli_query($conn,$sql);
if($result)
{
    header("location:view.php");
}
?>