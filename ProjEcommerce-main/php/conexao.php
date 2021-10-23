<?php
    //$conecta = pg_connect("host=localhost port=5432 dbname=a13italocarlos user=a13italocarlos password=cti");
    //if (!$conecta){
      // echo "<p class=\"aviso\">Não foi possível estabelecer conexão com o banco de dados!</p><br><br>";
       // exit;

   // }
//   $conecta = pg_connect("host=localhost port=5432 dbname=ecommerce user=postgres password=italo2901");
//   if (!$conecta){
//       echo "<p class=\"aviso\">Não foi possível estabelecer conexão com o banco de dados!</p><br><br>";
//       exit;

//    }
             $conecta = pg_connect("host=kesavan.db.elephantsql.com port=5432 dbname=epmmpnjf user=epmmpnjf password=n61RM3DiYC2lHiVJ20LCHh5itky1ZKam");
                if (!$conecta){
                  echo "<p class=\"aviso\">Não foi possível estabelecer conexão com o banco de dados!</p><br><br>";
            exit;
             }
?>    
