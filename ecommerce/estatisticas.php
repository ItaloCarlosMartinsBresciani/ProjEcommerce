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
        <a class="oito" href="estatisticas.php">Estatísticas <i class="fas fa-chart-bar"></i></a>&nbsp;&nbsp;
        <a class="um" href="devs.php">Desenvolvedores <i class="fab fa-dev"></i></a>&nbsp;&nbsp;
        

        <?php
                    
                    if (!isset($_SESSION["logou"]))
                    {
                        echo "<a class='um' href='login.php'>Login <i class='fas fa-sign-in-alt'></i></a>&nbsp;&nbsp;
                        <br><br><br>";
                    }
                    else{
                        echo "<a class='um' href='login.php'>Logado <i class='fas fa-info'></i></a>&nbsp;&nbsp;
                        <br><br><br>";
                    }
                    
                    ?>
      </div>


      <br> <br>

      <div id="camada_especial2">
        <div id="texto_imagem1">

          <br><br><br>
          <h2>
            Venha conhecer quais são os cursos mais famosos da Fleasy e quais sâo os nossos resultados!!!!
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
        <br>
        <div id="estat1">
          <img src="imagem/.png" width="350px" height="170px">
        </div>
        <div id="estat2">
          <br>
          <h2>
            <br>
            Número de visitantes no site no último mês!
          </h2>
        </div>
        <br><br><br><br> <br><br><br><br> <br>

        <div id="estat1">
          <img src="imagem/.png" width="350px" height="170px">
        </div>
        <div id="estat2">
          <br>
          <h2>
            <br>
            Quantidade de pessoas que fizeram mais de um curso!
          </h2>
        </div>
        <br><br><br><br> <br><br><br><br> <br>

        <div id="estat1">
          <img src="imagem/.png" width="350px" height="170px">
        </div>
        <div id="estat2">
          <br>
          <h2>
            <br>
            Numero de sócios no ultimo mês!!!
          </h2>
        </div>
        <br><br><br><br> <br><br><br><br> <br>

        <div id="estat1">
          <img src="imagem/.png" width="350px" height="170px">
        </div>
        <div id="estat2">
          <br>
          <h2>
            <br>
            O curso com maior recomendação!
          </h2>
        </div>
        <br><br><br><br> <br><br><br><br> <br>

        <div id="estat1">
          <img src="imagem/.png" width="350px" height="170px">
        </div>
        <div id="estat2">
          <br>
          <h2>
            <br>
            O curso mais vendido!
          </h2>
        </div>
      </div>

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
        <a class="dois" href="estatisticas.php">Estatísticas</a>&nbsp;&nbsp;
        <a class="dois" href="devs.php">Desenvolvedores</a>&nbsp;&nbsp;
        


        <?php
                    
                    if (!isset($_SESSION["logou"]))
                    {
                        echo "<a class='dois' href='login.php'>Login</a>&nbsp;&nbsp;
                        <br><br>";
                    }
                    else{
                        echo "<a class='dois' href='login.php'>Logado</a>&nbsp;&nbsp;
                        <br><br>";
                    }
                    ?>



        <a class="tres" href="#topo">Clique para voltar ao topo</a>
        <br> <br>
      </div>
      <br> <br>
      <p id="nomes">
      05 - Ellen Lorenz Vieira Antonetti 13 - Italo C. Martins Bresciani 18 - Laura Lima Denardi 26 - Nathan
      Braian Mariano Anunciação 34 - Ulisses Rodrigues Barreto
                  </p>
      <br>

    </div>


  </center>

</body>

</html>