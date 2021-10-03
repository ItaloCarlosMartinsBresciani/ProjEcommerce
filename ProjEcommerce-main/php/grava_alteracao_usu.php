<?php
    include "conexao.php"; 
    
    $idusuario=$_POST["idusuario"];
    $nome=$_POST["nome"];
    $telefone=$_POST["telefone"];
    $email=$_POST["email"];
    $cpf=$_POST["cpf"];
    $cep=$_POST["cep"];
    
    $sql="UPDATE usuario 
    SET
    idusuario = $idusuario,
    nome = '$nome',
    email = '$email',
    telefone = '$telefone',
    cep = '$cep',
    cpf = '$cpf',
    excluido = 'false'
    WHERE idusuario = $idusuario;";
    $resultado=pg_query($conecta,$sql);
    $qtde=pg_affected_rows($resultado);
    if ($qtde > 0){
        echo "<script type='text/javascript'>alert('Alteração OK !!!')</script>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=mostra_pacientes.php'>";
    }
    else echo "Erro na gravacao !!!<br><br>";

    pg_close($conecta);
    
?>