<?php

include("connection.php");

$email= $_GET["myVar"];

$myQuery= "SELECT * FROM student
WHERE semail='".$email."'";

$result= $conn->query($myQuery);

if($result->num_rows>0)
{
 while($row= $result-> fetch_assoc())
 {
    $nm=$row ["fullname"];
    $se=$row ["semail"];
    $cn=$row ["contact"];   
 }
}
else{
    echo "Data not found";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row p-5 bg-warning">
            <div class="col-md-6 p-5">
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    Fullname: 
                    <input type="text" name="fname" placeholder="Enter name" class="form-control" value="<?php echo $nm; ?>">
                    Email: 
                    <input type="email" name="email" placeholder="Enter email" class="form-control" value="<?php echo $se; ?>">
                    Contact: 
                    <input type="text" name="contact" placeholder="Enter contact" class="form-control" value="<?php echo $cn; ?>">
                    Password:
                    <input type="text" placeholder="Enter Password" name="spassword" class="form-control">
                    Select Gender:
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                    <br>
                    Select Branch:
                    <select name="branch">
                        <option value="21">AI&DS</option>
                        <option value="22">CSE</option>
                    </select>

                    <input type="file" name="fileToUpload" class="form-control" >

                    <input type="submit" class="btn btn-success" name="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>