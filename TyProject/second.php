<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1> Hello </h1>

    <?php

    $fn = $_POST["fname"];
    $ln = $_POST["lname"];
    $em = $_POST["email"];

    echo $fn . "<br>";
    echo $ln . "<br>";
    echo $em . "<br>";

    ?>

</body>
</html>