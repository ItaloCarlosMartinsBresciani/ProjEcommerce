<?php
    session_start();
    include "conexao.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['CPF'];
    $cep = $_POST['CEP'];
    $telefone = $_POST['telefone'];
    $senha = md5($_POST['password']);

    
    $sql = "SELECT email FROM usuario WHERE email = '$email';";
    
    $result = pg_query($conecta, $sql);
    $row = pg_num_rows($result);

    if($row > 0) {
        $_SESSION['usuario_existe'] = true;
        echo "
        <script>
        alert('Esse E-mail já está em uso, redigite!');
        </script>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=http://200.145.153.175/italocarlos/ecommerce/cadastro2.html'>";
        exit;
        
    }
    else{
        
        $_SESSION['usuario_existe'] = false;
        $sql = "INSERT INTO usuario (idusuario, nome, email, cpf, cep, telefone, senha) VALUES (DEFAULT, '$nome', '$email', '$cpf', '$cep', '$telefone', '$senha');";
        $resultado = pg_query($conecta, $sql);

        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=http://200.145.153.175/italocarlos/ecommerce/login.php'>";
        
        
    }
        
        
?>