<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="imagem/icon.png">
  <title>Home</title>
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
        <a class="oito" href="index.php">Home <i class="fas fa-home"></i></a>&nbsp;&nbsp;
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
      </div>

      <br> <br>

      <div id="camada_especial2">
        <div id="texto_imagem1">

          <br><br><br>
          <h2>
            Seja muito bem-vindo à Home do Fleasy, seu jeito fácil de aprender rápido on-line!
          </h2>
          <br><br><br><br><br><br>
        </div>

        <div id="texto_imagem2">
          <img src="imagem/logo.png" width="300px" height="240px">
        </div>
        <br>
      </div>
      <br>

      <div id="camada_especial">
        <center>
          <br>
          <h1>Categorias dos cursos <i class="fas fa-address-book"></i> </h1>

          <div id="text_imag">

            <div id="interna1">
              <img src="imagem/game.jpeg" width="277" height="210">
            </div>

            <div id="interna2">
              <p>
              <h2> Video Games</h2>
              <a class="quatro" href="produtos.php">Inspecionar</a>
              </p>
            </div>

          </div>


          <div id="text_imag">

            <div id="interna1">
              <img src="imagem/cultura.jpg" width="277" height="210">
            </div>

            <div id="interna2">
              <p>
              <h2>Cultura</h2>
              <a class="quatro" href="produtos.php">Inspecionar</a>
              </p>
            </div>

          </div>


          <div id="camada_especial">


            <div id="text_imag">

              <div id="interna1">
                <img src="imagem/prog.jpg" width="277" height="210">
              </div>

              <div id="interna2">
                <p>
                <h2>Programação</h2>
                <a class="quatro" href="produtos.php">Inspecionar</a>
                </p>
              </div>

            </div>


            <div id="text_imag">

              <div id="interna1">
                <img src="imagem/culinaria.jpg" width="277" height="210">
              </div>

              <div id="interna2">
                <p>
                <h2>Culinaria</h2>
                <a class="quatro" href="produtos.php">Inspecionar</a>
                </p>
              </div>

            </div>


          </div>

          <br><br><br><br>
          <!---Fecha div text imag----->
          

          <br><br>
          <br><br><br><br><br>
        </center>
      </div>

      <br><br>
      
      <br><br><br>

      <div id="camada_especial2">

        <div id="texto_imagem1">

          <br><br><br>
          <h2>
            Venha ser um membro! Tenha um apredizado rápido e fácil!
            <br><br><br>
            <a href="cadastro2.html">Clique para se cadastrar</a>
          </h2>
          <br><br><br><br><br><br>
        </div>

        <div id="texto_imagem2">
          <iframe width="420px" height="240px" src="https://www.youtube.com/embed/-mMvTiAdxns"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

        </div>

      </div>


      <!----Fecha div camada1------>


      <br><br><br>

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
      <br>
      05 - Ellen Lorenz Vieira Antonetti 13 - Italo C. Martins Bresciani 18 - Laura Lima Denardi 26 - Nathan
      Braian Mariano Anunciação 34 - Ulisses Rodrigues Barreto
      <br>

    </div>


  </center>

</body>

</html>