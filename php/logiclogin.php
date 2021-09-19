 <?php
     session_start();
    include "conexao.php";
    
    $login = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql="SELECT senha FROM usuario WHERE email  = '$login';";

     
    $resultado=pg_query($conecta,$sql);
    $qtde=pg_num_rows($resultado);
    if ($qtde > 0)
    {
        $linha=pg_fetch_array($resultado);
        if ($senha == $linha['senha'])
        {
            $_SESSION["logou"] = 'S';
            echo "passei";
        }
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cadastro.php'>";
    }
    else	
    {
                    echo "<p class=\"aviso\">Erro no registo!</p><br> Tente novamente!<br>";
                    echo pg_last_error($resultado);

    }
    
    exit;




/*
    session_start();
    include "conexao.php";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['nome'];
        $password = md5($_POST['senha']);

        $sql = "SELECT adm FROM usuarios WHERE nome = '$username' AND senha = '$password' AND excluido = '0'";
        $result = sqlQuery($sql);

        if($result == null){
            $error_sql = "<p>Usuário e senha não foram encontrados ou não correspondem.</p>";
            $_SESSION['logado'] = false;
        }
        else{
            $_SESSION['adm'] = (bool) pg_fetch_result($result,0,0);
            $_SESSION['logado'] = true;

            pg_close();
            header('Location: http://200.145.153.175/italocarlos/ecommerce/index.html');
            exit;
        }
        pg_close();
    }
*/
?>