<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>View Data</h1>
    <table bordered=1> <!--bordered=1-->
    <tr>
        <th>fullname</th>
        <th>email</th>
        <th>contact</th>
        <!-- <th>password</th> -->
    </tr>
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
        
        echo "
        <tr>
            <td>".$nm."</td>
            <td>".$se."</td>
            <td>".$cn."</td>
        </tr>
        ";
     }
    }
    else{
        echo "Data not found";
    }

    ?>
</table>
</body>
</html>