<?php
    session_start();
    include("connection.php");
    $user = $_POST["username"];
    $pass = $_POST["password"];

    $myQuery = "SELECT * FROM student WHERE semail = '".$user."'";

    $result = $conn->query($myQuery);

    if( $result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        $pass2 = $row["password"];

        if(  password_verify($pass, $pass2) )
        {
            $_SESSION["userLogin"] = $user;

            header("Location: home.php");
        }
        else
        {
            echo"
            <script type='text/javascript'>
                alert('Wrong Password');
                window.location.href='login.html';
            </script>";
        }
    }
    else
    {
        echo "
                <script type='text/javascript'>
                    alert('Please signup');
                    window.location.href='registration.html';
                </script>
            ";
    }
?>