<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="imagem/icon.png">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="../css/info.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/8545ffdfda.js" crossorigin="anonymous"></script>
</head>


<body>

  <?php
        include "conexao.php";
        
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
        <h1>Informações do curso <i class="far fa-file-alt"></i></h1><br>
        
  </header>  
  <?php echo '<img src="../'.$linha["imagem"].'" width="150px" height="120px">
    <form action="../carrinho.php?acao=add&idcurso='.$linha["idcurso"].'" method="POST">';?>
      
        <label>Nome do curso</label> <input type="text" name="nomecurso" 
        value="<?php echo $linha[1]; ?>" maxlength="50" readonly><br>
        <label>Preço (R$)</label> <input type="email" name="preco" 
        value="<?php echo $linha[2]; ?>" readonly><br>
        <label>Aulas</label> <input type="text" name="aulas" 
        value="<?php echo $linha[3]; ?>" size="20" maxlength="20" readonly><br>
        <label>Gênero</label> <input type="text" name="genero" 
        value="<?php echo $linha[4]; ?>" size="9" maxlength="9" readonly><br>
        <label>Criador</label> <input type="text" name="criador" 
        value="<?php echo $linha[6]; ?>" maxlength="16" readonly><br>
        <label>Descrição</label> <input type="text" name="img" 
        value="<?php echo $linha[7]; ?>" maxlength="16" readonly><br>

        
        <input type="submit" value="Comprar">
        </form>
        <form action='../produtos.php' method='POST'>
        <input type='submit' value='Voltar'>
        </form>
   



    </div>




<br>
  </div>

</body>
</html>