<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view.css">
</head>
<body id="bass">
    <header id="drum"><h1>LIST OF RECORDS</h1></header>
    <hr>
    <table border=2 class="poco">
        <tr>
            <th>SN</th>
            <th>Student_Name</th>
            <th>Student_Id</th>
            <th>Book_Title</th>
            <th>Book_Author</th>
            <th>Book_Id</th>
            <th>Issue_date</th>
            <th>Action</th>
</tr>
    <?php 
    include 'db.php';
    $sql="SELECT * FROM details";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $Id=$row['Id'];
            $Student_Name=$row['Student_Name'];
            $Student_Id=$row['Student_Id'];
            $Book_Title=$row['Book_Title'];
            $Book_Author=$row['Book_Author'];
            $Book_Id=$row['Book_Id'];
            $Issue_date=$row['Issue_date'];
            ?>
            <tr>
            <td><?php echo $Id?></td>
             <td><?php echo $Student_Name?></td>
   <td><?php echo $Student_Id?></td>
    <td><?php echo $Book_Title?></td>
    <td><?php echo $Book_Author?></td>
    <td><?php echo $Book_Id?></td>
    <td><?php echo $Issue_date?></td>
    <td><a href="update.php?Id=<?php echo $Id ?>" id="k">Update
    <a href="delete.php?Id=<?php echo $Id ?>" id="l">Delete</td>
        </tr>
        <?php
        }
    }
    ?>
</table>
</body>
</html>