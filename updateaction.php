<?php
include 'db.php';
$Id=$_POST['Id'];
$Student_Name=$_POST['StudentName'];	
$Student_Id=$_POST['StudentId'];	
$Book_Title=$_POST['BookTitle'];	
$Book_Author=$_POST['BookAuthor'];	
$Book_Id=$_POST['BookId'];	
$Issue_date=$_POST['Issuedate'];
$sql="UPDATE details SET Student_Name='$Student_Name',Student_Id='$Student_Id',Book_Title='$Book_Title',Book_Author='$Book_Author', Book_Id='$Book_Id',Issue_date='$Issue_date' WHERE Id='$Id'";
$result=mysqli_query($conn,$sql);
if($result)
{
    header("Location:view.php");
}
?>