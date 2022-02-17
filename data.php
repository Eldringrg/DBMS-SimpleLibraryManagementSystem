
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
    <form action="create.php" method="post">
        <div id="info">
            <h2>ENTER DETAILS</h2>
            <label for="StudentName"><b>Student Name:</b></label>
            <input type="text" name="StudentName"placeholder="Enter Student Name " id="a" required><br><br>
            <label for="StudentId"><b>Student Id:</b></label>
            <input type="number " name="StudentId"  placeholder="Enter Student Id " id="b" required><br><br>
            <label for="BookTitle"><b>Book Title:</b></label>
            <input type="text" name="BookTitle"placeholder="Enter Book Title " id="c" required><br><br>
            <label for="BookAuthor"><b>Book Author:</b></label>
            <input type="text " name="BookAuthor" placeholder="Enter Book Author " id="d" required><br><br>
            <label for="BookId"><b>Book ID:</b></label>
            <input type="number " name="BookId" placeholder="Enter Book ID "id="e" required><br><br>
          <label for="Issuedate"><b>ISSUE DATE:</b></label>
            <input type="date" name="Issuedate" placeholder="Enter Book Issue Date"id="f" required><br><br>
            <input type="submit" name="submit" value="Save" id="g">     
</div>
<hr>
</form>
<form action="view.php" method="get">
    <div id="wow">
<input type="submit" name="submit" value="RECORDS" id="hi"> 
</div>
</form> 
<hr>
<form action = "search.php" method="get">
    <div id="wing">
        <label> SEARCH RECORDS :<label>
        <input type="text" name="search" placeholder="Enter Student's Name" id="jack" required>
</div>
        <div id="ola">
        <input type="submit" value="SEARCH" id="max">
</div>
        </form> 
</body>
</html>