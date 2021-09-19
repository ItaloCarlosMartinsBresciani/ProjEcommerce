<?php
    session_start();
    
    if(isset($_SESSION['isAuth'])) {
        header("Location: index.html ");
	    exit();
    }
?>


<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="imagem/icon.png">
  <title>Desenvolvedores</title>
  <link rel="stylesheet" type="text/css" href="estilos.css" />
  <link rel="stylesheet" href="../css/estilos.css">
    

</head>

<body>

  <center>
    <div id="mae">

      <br>
      <a name="topo"></a>

      <div id="camada1">
        <br>

        <a href="index.html"><img id="user" src="imagem/user.png"></a>
        <br><br>
        <a class="um" href="index.html">Home</a>&nbsp;&nbsp;
        <a class="um" href="produtos.html">Produtos</a>&nbsp;&nbsp;
        <a class="um" href=".html">Comprar</a>&nbsp;&nbsp;
        <a class="um" href="devs.html">Desenvolvedores</a>&nbsp;&nbsp;
        <a class="um" href=".html">Estatísticas</a>&nbsp;&nbsp;
        <a class="um" href="php/cadastro.php">Cadastro</a>&nbsp;&nbsp;
        <br><br><br>

      </div>

      <br><br><br>

      <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 0) {
                    echo "<div class='error-login'>Campos vazios!</div>";
                } else {
                    echo "<div class='error-login'>Email ou senha invalidos!</div>";
                }
            }
        ?>




      <form action="../php/logiclogin.php" onsubmit="return loginValidate(event)" method="POST">
        <input type="email" name="email" id="email" placeholder="Email" maxlength='128'>

        <div id="password-box">
            <input type="password" name="password" id="password" placeholder="Senha" maxlength='128'>
        </div>

        <input type="submit" name="login-user-submit" class="submitBtn" value="Entrar">
    </form>

    <div class="register">
        <span>Não tem uma conta? <a href="register.php">Cadastre-se</a></span>
    </div>


      
      <div id="camada3">
        <br>
        <a class="dois" href="index.html">Home</a>&nbsp;&nbsp;
        <a class="dois" href="produtos.html">Produtos</a>&nbsp;&nbsp;
        <a class="dois" href=".html">Comprar</a>&nbsp;&nbsp;
        <a class="dois" href="devs.html">Desenvolvedores</a>&nbsp;&nbsp;
        <a class="dois" href=".html">Estatísticas</a>&nbsp;&nbsp;
        <a class="dois" href="php/cadastro.php">Cadastro</a>&nbsp;&nbsp;
        <br><br>
        <a class="tres" href="#topo">Clique para voltar ao topo</a>
        <br> <br>
    </div>
    <br>
    05 - Ellen Lorenz Vieira Antonetti 13 - Italo C. Martins Bresciani 18 - Laura Lima Denardi 26 - Nathan
    Braian Mariano Anunciação 34 - Ulisses Rodrigues Barreto
    <br>
    </div>
  </center>
</body>