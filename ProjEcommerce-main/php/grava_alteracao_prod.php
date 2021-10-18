<?php
    include "conexao.php"; 
    
    $idcurso=$_POST["idcurso"];
    $nomecurso=$_POST["nomecurso"];
    $preco=$_POST["preco"];
    $aulas=$_POST["aulas"];
    $genero=$_POST["genero"];
    $criador=$_POST["criador"];
    $img=$_POST["img"];
    
    $sql="UPDATE cursos SET idcurso = $idcurso, nomecurso = '$nomecurso', preco = '$preco', aulas = '$aulas', genero = '$genero', criador = '$criador', img = '$img' WHERE idcurso = $idcurso;";

    $resultado=pg_query($conecta,$sql);
    $qtde=pg_affected_rows($resultado);
    if ($qtde > 0){
        echo "<script type='text/javascript'>alert('Alteração OK !!!')</script>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../tabelas_prod.php'>";
    }
    else echo "Erro na gravacao !!!<br><br>";

    pg_close($conecta);
    
?>