<?php
    $conecta = pg_connect("host=localhost port=5432 dbname=a13italocarlos user=a13italocarlos password=cti");
    if (!$conecta){
       echo "<p class=\"aviso\">Não foi possível estabelecer conexão com o banco de dados!</p><br><br>";
        exit;

    }
   //$conecta = pg_connect("host=localhost port=5432 dbname=ecommerce user=postgres password=italo2901");
  // if (!$conecta){
      // echo "<p class=\"aviso\">Não foi possível estabelecer conexão com o banco de dados!</p><br><br>";
      // exit;

 //  }

?>    
