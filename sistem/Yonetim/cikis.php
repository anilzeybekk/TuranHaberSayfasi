<?php
session_start();

    $_SESSION = [];

    if(isset($_COOKIE[session_name()]))
    {
        setcookie(session_name(), '', time()-86400, '/');
    }

    session_destroy();
    
echo "<script> window.location.href='giris.php';
        </script>";

?>