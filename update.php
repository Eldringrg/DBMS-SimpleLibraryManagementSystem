
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LibraryMS</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <header><h1>WRC LIBRARY MANAGEMENT SYSTEM</h1></header>
    <hr>
    <h1>UPDATE RECORDS</h1>
    <?php 
    include 'db.php';
    $Id=$_GET['Id'];
    $sql="SELECT * FROM details WHERE Id=".$Id;
    $result=mysqli_query($conn,$sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
        $Student_Name=$row['Student_Name'];
        $Student_Id=$row['Student_Id'];
        $Book_Title=$row['Book_Title'];
        $Book_Author=$row['Book_Author'];
        $Book_Id=$row['Book_Id'];
        $Issue_date=$row['Issue_date'];
    }
    ?>
    <form action="updateaction.php" method="post">
        <div id="info">
            <h2>ENTER DETAILS</h2>
            <label for="StudentName"><b>Student Name:</b></label>
            <input type="text" name="StudentName"placeholder="Enter Student Name " value="<?php global $Student_Name;echo $Student_Name?>"id="a" ><br><br>
            <label for="StudentId"><b>Student Id:</b></label>
            <input type="number " name="StudentId"  placeholder="Enter Student Id " value="<?php global $Student_Id;echo $Student_Id?>"id="b" ><br><br>
            <label for="BookTitle"><b>Book Title:</b></label>
            <input type="text" name="BookTitle"placeholder="Enter Book Title " value="<?php global $Book_Title;echo $Book_Title?>"id="c" ><br><br>
            <label for="BookAuthor"><b>Book Author:</b></label>
            <input type="text " name="BookAuthor" placeholder="Enter Book Author " value="<?php global $Book_Author;echo $Book_Author?>"id="d" ><br><br>
            <label for="BookId"><b>Book ID:</b></label>
            <input type="number " name="BookId" placeholder="Enter Book ID " value="<?php global $Book_Id;echo $Book_Id?>"id="e" ><br><br>
          <label for="Issuedate"><b>ISSUE DATE:</b></label>
            <input type="date" name="Issuedate" placeholder="Enter Book Issue Date" value="<?php global $Issue_date;echo $Issue_date?>"id="f" ><br><br>
            <input type="hidden" name="Id" value="<?php global $Id; echo $Id?>" id="id">   
            <input type="submit" name="submit" value="Update" id="g">     
</div>
</form>
</body>
</html>