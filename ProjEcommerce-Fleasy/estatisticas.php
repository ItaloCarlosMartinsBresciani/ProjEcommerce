<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="imagem/icon.png">
  <title>Estatísticas</title>
  <link rel="stylesheet" type="text/css" href="css/estilos.css" />
  <script src="https://kit.fontawesome.com/8545ffdfda.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>

  <center>
    <div id="mae">

      <br>
      <a name="topo"></a>

      <div id="camada1">
        <br>

        <a href="index.php"><img id="user" src="imagem/user.png"></a>
        <br><br>

        <?php 
                    session_start();
                    include "php/adm.php";
                    $adm = isMaster();
                    if($adm){
                        echo "<a href='tabelas_usu.php'><i class='fas fa-cogs'></i></a>";
                         }
                ?>
        <a class="um" href="index.php">Home <i class="fas fa-home"></i></a>&nbsp;&nbsp;
        <a class="um" href="produtos.php">Produtos <i class="fas fa-desktop"></i></a>&nbsp;&nbsp;

        <?php
        
                        if (!isset($_SESSION["logou"]))
                        {
                        echo '<a class="um" href="login.php">Carrinho <i class="fas fa-shopping-cart"></i></a>&nbsp;&nbsp;';
                        }
                        else{
                            echo '<a class="um" href="carrinho.php">Carrinho <i class="fas fa-shopping-cart"></i></a>&nbsp;&nbsp;';
                        }
                ?>
        <a class="um" href="devs.php">Desenvolvedores <i class="fab fa-dev"></i></a>&nbsp;&nbsp;
        <a class="oito" href="estatisticas.html">Estatísticas</a>&nbsp;&nbsp;

        <?php
                    
                    if (!isset($_SESSION["logou"]))
                    {
                        echo "<a class='um' href='login.php'>Login <i class='fas fa-sign-in-alt'></i></a>&nbsp;&nbsp;
                        <br><br><br>";
                    }
                    else{
                        echo "<a class='um' href='login.php'>Info <i class='fas fa-info'></i></a>&nbsp;&nbsp;
                        <br><br><br>";
                    }
                    
                    ?>
      </div>


      <br> <br>

      <div id="camada_especial2">
        <div id="texto_imagem1">

          <br><br><br>
          <h2>
            Venha conhecer quais são os resultados da Fleasy!!!!
          </h2>
          <br><br><br><br><br><br>
        </div>

        <div id="texto_imagem2">
          <img src="imagem/logo.png" width="300px" height="240px">
        </div>
        <br>
      </div>
      <br><br>

      <!--- -->


      <div id="camada_especial5">
        <br><br>

        <br><br>
      <!--- -->

      <br><br>

      <div id="camada3">
        <br>
        <a class="dois" href="index.php">Home</a>&nbsp;&nbsp;
        <a class="dois" href="produtos.php">Produtos</a>&nbsp;&nbsp;

        <?php
        
                            if (!isset($_SESSION["logou"]))
                            {
                            echo '<a class="dois" href="login.php">Carrinho </a>&nbsp;&nbsp;';
                            }
                            else{
                                echo '<a class="dois" href="carrinho.php">Carrinho </a>&nbsp;&nbsp;';
                            }
                            ?>
        <a class="dois" href="devs.php">Desenvolvedores</a>&nbsp;&nbsp;
        <a class="dois" href=".html">Estatísticas</a>&nbsp;&nbsp;


        <?php
                    
                    if (!isset($_SESSION["logou"]))
                    {
                        echo "<a class='dois' href='login.php'>Login</a>&nbsp;&nbsp;
                        <br><br>";
                    }
                    else{
                        echo "<a class='dois' href='login.php'>Info</a>&nbsp;&nbsp;
                        <br><br>";
                    }
                    ?>



        <a class="tres" href="#topo">Clique para voltar ao topo</a>
        <br> <br>
      </div>
      <br> <br>
      05 - Ellen Lorenz Vieira Antonetti 13 - Italo C. Martins Bresciani 18 - Laura Lima Denardi 26 - Nathan
      Braian Mariano Anunciação 34 - Ulisses Rodrigues Barreto
      <br>

    </div>


  </center>

</body>

</html>