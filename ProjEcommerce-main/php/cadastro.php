<?php
    session_start();
    include "conexao.php";
    
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);

    $sql="SELECT senha FROM usuario WHERE email  = '$login';";
    

    $resultado=pg_query($conecta,$sql);
    $qtde=pg_affected_rows($resultado);

    if ($qtde > 0)
    {
        $linha=pg_fetch_array($resultado);
        if ($senha == $linha['senha'])
        {
            $_SESSION["logou"] = 'S';
            echo "passei";
        }
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=http://200.145.153.175/italocarlos/ecommerce/index.php'>";
    }
    else	
    {
                    echo "<p class=\"aviso\">Erro no registo!</p><br> Tente novamente!<br>";
                    echo pg_last_error($resultado);


    }
    
    exit;
?>