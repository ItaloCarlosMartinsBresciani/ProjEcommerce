<?php 
function isMaster(){
        $_SESSION['adm'] = $_SESSION['adm'] ?? FALSE;
        return $_SESSION['adm'];
    } 


    