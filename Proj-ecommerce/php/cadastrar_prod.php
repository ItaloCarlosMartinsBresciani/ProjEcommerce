<?php
    session_start();
    include "conexao.php";

    
    
    $nomecurso=$_POST["nomecurso"];
    $preco=$_POST["preco"];
    $aulas=$_POST["aulas"];
    $genero=$_POST["genero"];
    $criador=$_POST["criador"];
    $img=$_POST["img"];
    $imagem=$_POST["imagem"];
    
    $sql = "SELECT nomecurso FROM cursos WHERE nomecurso = '$nomecurso';";
    
    $result = pg_query($conecta, $sql);
    $row = pg_num_rows($result);

    if($row > 0) {
        $_SESSION['curso_existe'] = true;
        echo "
        <script>
        alert('Esse nome já está em uso, redigite!');
        </script>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cadastro_prod.html'>";
        exit;
        
    }
    else{
        
        $_SESSION['curso_existe'] = false;
        $sql = "INSERT INTO cursos (idcurso, nomecurso, preco, aulas, genero, criador, img, imagem) VALUES (DEFAULT, '$nomecurso', '$preco', '$aulas', '$genero', '$criador', '$img', '$imagem');";
        $resultado = pg_query($conecta, $sql);
        echo "<script>alert('Cadastrado com sucesso!');</script>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../produtos.php'>";
        
        
    }
        
        
?>