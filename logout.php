<?php
    session_start();
    session_unset();
    session_destroy();
    header('location: index.php?info=Successfully_logged_out');
?>