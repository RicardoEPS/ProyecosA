<?php
    session_start();
    session_unset();
    session_destroy();
    //$_SESSION['Usuario'] == "");
    header("Location: Login.php?");
    exit();
?>