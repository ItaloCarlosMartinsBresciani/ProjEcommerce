<?php
    session_start();
    if (isset($_SESSION["logou"]))
    {
        session_unset();
        session_destroy();
    }

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=http://200.145.153.175/italocarlos/ecommerce/login.php'>";
    exit;
?>