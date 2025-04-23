<?php
session_start();
if ( isset( $_SESSION["userLogin"] ))
{
    session_destroy();

    echo "
    <script type='text/javascript'>
        alert('Logout Successful');
        window.location.href='login.html';
    </script>
    "
}

?>