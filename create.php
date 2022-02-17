<?php
$Student_Name=$_POST['StudentName'];	
$Student_Id=$_POST['StudentId'];	
$Book_Title=$_POST['BookTitle'];	
$Book_Author=$_POST['BookAuthor'];	
$Book_Id=$_POST['BookId'];	
$Issue_date=$_POST['Issuedate'];
include 'db.php';
$sql="INSERT INTO details(Student_Name,Student_Id,Book_Title,Book_Author,Book_Id,Issue_date)VALUES('$Student_Name','$Student_Id','$Book_Title','$Book_Author','$Book_Id','$Issue_date')";
$result=mysqli_query($conn,$sql);
if($result){
    header('Location:data.php');
}
?>