<?php
    session_start();
    if (isset($_SESSION["logou"]))
    {
        session_unset();
        session_destroy();
    }

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../login.php'>";
    exit;
?>