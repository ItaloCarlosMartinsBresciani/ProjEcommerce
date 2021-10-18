
<!DOCTYPE html>
<html lang="pt-br">
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
            echo "<a class=\"aviso\">Produto não encontrado  !!!</a><br><br>";
            exit;
        }
        $linha = pg_fetch_array($resultado);
    ?>
    
    <div id="login-container">
    <header>
        <h1>Alteração de curso <i class="fas fa-user-edit"></i></h1><br>

    </header>   
    <form action="grava_alteracao_prod.php" method="post">
    <label>ID do curso</label> <input type="text" name="idcurso" 
        value="<?php echo $linha[0]; ?>" readonly><br>
        <label>Nome do curso</label> <input type="text" name="nomecurso" 
        value="<?php echo $linha[1]; ?>" maxlength="50" ><br>
        <label>Preço (R$)</label> <input type="text" name="preco" 
        value="<?php echo $linha[2]; ?>"><br>
        <label>Aulas</label> <input type="text" name="aulas" 
        value="<?php echo $linha[3]; ?>" size="20" maxlength="5" ><br>
        <label>Gênero</label> <input type="text" name="genero" 
        value="<?php echo $linha[4]; ?>" size="9" maxlength="20" ><br>
        <label>Criador</label> <input type="text" name="criador" 
        value="<?php echo $linha[6]; ?>" maxlength="50" ><br>
        <label>Descrição</label> <input type="text" name="img"      
        value="<?php echo $linha[7]; ?>" maxlength="200" ><br>
        
        <input type="submit" value="Atualizar">
        </form>
        <form action='../tabelas_prod.php' method='POST'>
        <input type='submit' value='Voltar'>
        </form>
   



    </div>
</body>
</html>






