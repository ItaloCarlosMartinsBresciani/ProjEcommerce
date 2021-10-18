<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="imagem/icon.png">
  <title>Desenvolvedores</title>
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
        <a class="um" href=".html">Estatísticas</a>&nbsp;&nbsp;
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
        
        
        <br><br><br>

      </div>
      <div id="titulo">
        <h1>Desenvolvedores</h1>
      </div>
      
      

      <div id="camada_especial4">
        <br>
        <div id="devs1">
          <img src="imagem/ellen.png" width="150px" height="150px">
        </div>
        <div id="devs2">
          <br>
          <h4>
            <br><br>
            05 - Ellen Lorenz Vieira Antonetti
          </h4>
        </div>
        <br><br><br><br> <br><br><br><br> <br>

        <div id="devs1">
          <img src="imagem/italo.png" width="150px" height="150px">
        </div>
        <div id="devs2">
          <br>
          <h4>
            <br><br>
            13 - Italo Carlos Martins Bresciani
          </h4>
        </div>
        <br><br><br><br> <br><br><br><br> <br>

        <div id="devs1">
          <img src="imagem/denardi.png" width="150px" height="150px">
        </div>
        <div id="devs2">
          <br>
          <h4>
            <br><br>
            18 - Laura Lima Denardi
          </h4>
        </div>
        <br><br><br><br> <br><br><br><br> <br>

        <div id="devs1">
          <img src="imagem/nathan.png" width="150px" height="150px">
        </div>
        <div id="devs2">
          <br>
          <h4>
            <br><br>
            26 - Nathan Braian Mariano Anunciação
          </h4>
        </div>
        <br><br><br><br> <br><br><br><br> <br>

        <div id="devs1">
          <img src="imagem/ulisses.png" width="150px" height="150px">
        </div>
        <div id="devs2">
          <br>
          <h4>
            <br><br>
            34 - Ulisses Rodrigues Barreto
          </h4>
        </div>
      </div>

      <br><br>

      <div id="camada3">
        <br>
        <a class="dois" href="index.php">Home</a>&nbsp;&nbsp;
        <a class="dois" href="produtos.php">Produtos</a>&nbsp;&nbsp;
        <?php
        
        if (!isset($_SESSION["logou"]))
        {
          echo '<a class="dois" href="login.php">Carrinho</a>&nbsp;&nbsp;';
        }
        else{
            echo '<a class="dois" href="carrinho.php">Carrinho</a>&nbsp;&nbsp;';
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
        <br> 
    </div>
    <br>
    05 - Ellen Lorenz Vieira Antonetti 13 - Italo C. Martins Bresciani 18 - Laura Lima Denardi 26 - Nathan
    Braian Mariano Anunciação 34 - Ulisses Rodrigues Barreto
    <br>

    </div>
  </center>
</body>