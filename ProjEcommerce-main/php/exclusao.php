
<?php
    include "conexao.php";

  
    $idusuario = $_POST['idusuario'];
    $data=date('d/m/Y'); 

    $sql="UPDATE usuarios set excluido = 'true' WHERE idusuario = $idusuario";
    

    $resultado=pg_query($conecta,$sql);
    $qtde=pg_affected_rows($resultado);
    if ($qtde > 0 ){
         
        //$sql="UPDATE usuario set dataexclusao = $data WHERE idusuario = $idusuario";
        echo "<script type='text/javascript'>alert('Usuário excluído!')</script>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../tabelas_usu.php'>";
        
    }
    else{
        echo "Erro na exclusão !!!<br>";
        echo "<a href='confirma_exclusao.php'>Voltar</a>";
    }
?>