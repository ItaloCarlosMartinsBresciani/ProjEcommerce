<?php
    session_start();
    if (!isset($_SESSION["logou"]))
    {
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=session_telalogin.php'>";
        exit;
    }
?>
