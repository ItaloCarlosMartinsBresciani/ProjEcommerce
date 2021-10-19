<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/8545ffdfda.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/form.css" />
</head>
<body>

<?php
        include "conexao.php";
        //dados enviados do script altera_prod.php
        $idcurso = $_GET["idcurso"];
        $sql="SELECT * FROM cursos WHERE idcurso = $idcurso;";
        $resultado=pg_query($conecta,$sql);
        $qtde=pg_num_rows($resultado);
        if ( $qtde == 0 ){
            echo "<a class=\"aviso\">Curso não encontrado  !!!</a><br><br>";
            exit;
        }
        $linha = pg_fetch_array($resultado);
    ?>
    
    <div id="login-container">
    <header>
        <h1>Exclusão de curso <i class="fas fa-user-slash"></i></h1><br>

    </header>   
        <form action="exclusao_prod.php" method="post">
        <label>ID do curso</label> <input type="text" name="idcurso" 
        value="<?php echo $linha[0]; ?>" readonly><br>
        <label>Nome do curso</label> <input type="text" name="nomecurso" 
        value="<?php echo $linha[1]; ?>" maxlength="50" readonly><br>
        <label>Preço (R$)</label> <input type="text" name="preco" 
        value="<?php echo $linha[2]; ?>" readonly><br>
        <label>Aulas</label> <input type="text" name="aulas" 
        value="<?php echo $linha[3]; ?>" size="20" maxlength="20" readonly><br>
        <label>Gênero</label> <input type="text" name="genero" 
        value="<?php echo $linha[4]; ?>" size="9" maxlength="9" readonly><br>
        <label>Criador</label> <input type="text" name="criador" 
        value="<?php echo $linha[6]; ?>" maxlength="16" readonly><br>
        <label>Descrição</label> <input type="text" name="img" 
        value="<?php echo $linha[7]; ?>" maxlength="16" readonly><br>
        
        <input type="submit" value="Excluir">
        </form>
        <form action='../tabelas_prod.php' method='POST'>
        <input type='submit' value='Voltar'>
        </form>
   



    </div>

</body>
</html>


