
<?php
    include "conexao.php";

  
    $idcurso = $_POST['idcurso'];
    $data=date('d/m/Y'); 

    $sql="UPDATE cursos set excluido = 'true' WHERE idcurso = $idcurso";
    

    $resultado=pg_query($conecta,$sql);
    $qtde=pg_affected_rows($resultado);
    if ($qtde > 0 ){
         
        //$sql="UPDATE usuario set dataexclusao = $data WHERE idusuario = $idusuario";
        echo "<script type='text/javascript'>alert('Curso removido!')</script>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../tabelas_prod.php'>";
        
    }
    else{
        echo "Erro na exclusão !!!<br>";
        echo "<a href='confirma_exclusao_prod.php'>Voltar</a>";
    }
?>