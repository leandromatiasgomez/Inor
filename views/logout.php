<?php

    session_start();

    session_unset();

    session_destroy();
    
    header("location: /Inor/home.php");

?>