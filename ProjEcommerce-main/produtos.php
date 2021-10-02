<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="imagem/icon.png">
  <title>Produtos</title>
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

        <a href="index.html"><img id="user" src="imagem/user.png"></a>
        <br><br>
        <?php 
                    session_start();
                    include "php/adm.php";
                    $adm = isMaster();
                    if($adm){
                        echo "<a href='tabelas_prod.php'><i class='fas fa-cogs'></i></a>";
                         }
                ?>
        <a class="um" href="index.php">Home <i class="fas fa-home"></i></a>&nbsp;&nbsp;
        <a class="um" href="produtos.php">Produtos <i class="fas fa-desktop"></i></a>&nbsp;&nbsp;
        <a class="um" href=".html">Comprar <i class="fas fa-shopping-cart"></i></a>&nbsp;&nbsp;
        <a class="um" href="devs.php">Desenvolvedores <i class="fab fa-dev"></i></a>&nbsp;&nbsp;
        <a class="um" href=".html">Estatísticas</a>&nbsp;&nbsp;
        <?php
        session_start();
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

      <br><br><br><br>

      <div id="camada_especial3">
        <div id="texto_produto1">
          <img src="imagem/historia.jpeg" width="150px" height="120px">
        </div>
        <div id="texto_produto2">
          <br>
          <h4>
            Curso de historia falando sobre o feminismo, seus antecedentes, consequencias e seus
            procedentes.
          </h4>
        </div>

        

        <div id="texto_produto1">
          <img src="imagem/culinaria.jpg" width="150px" height="120px">
        </div>
        <div id="texto_produto2">
          <br><br>
          <h4>
            Curso de culinaria ensinando uma receita facil de brownie de um jito fácil, rápido e saudável.
          </h4>
        </div>

        <br><br>

        <div id="texto_produto1">
          <img src="imagem/origami.jpg" width="150px" height="120px">
        </div>
        <div id="texto_produto2">
          <br>
          <h4>
            Curso de dobraduras ensinando a fazer os tres origamis mais faceis e simples para quem está comecando.
          </h4>
        </div>

        

        <div id="texto_produto1">
          <img src="imagem/game.jpeg" width="150px" height="120px">
        </div>
        <div id="texto_produto2">
          <br><br>
          <h4>
            Curso de videogame ensinando iniciantes a jogarem Minecraft.
          </h4>
        </div>

        <br><br>

        <div id="texto_produto1">
          <img src="imagem/prog1.jpeg" width="150px" height="120px">
        </div>
        <div id="texto_produto2">
          <br>
          <h4>
            Primeira parte de um curso sobre a linguagem de programação C++ para iniciantes que é dividido em duas
            partes.
          </h4>
        </div>


        <div id="texto_produto1">
          <img src="imagem/prog2.jpeg" width="150px" height="120px">
        </div>
        <div id="texto_produto2">
          <br><br>
          <h4>
            Segunda e ultima parte de um curso sobre a linguagem de programação C++ para iniciantes.
          </h4>
        </div>

        <br><br>
      </div>

      <br><br><br><br><br>


      
      <div id="camada3">
        <br>
        <a class="dois" href="index.php">Home</a>&nbsp;&nbsp;
        <a class="dois" href="produtos.php">Produtos</a>&nbsp;&nbsp;
        <a class="dois" href=".html">Comprar</a>&nbsp;&nbsp;
        <a class="dois" href="devs.php">Desenvolvedores</a>&nbsp;&nbsp;
        <a class="dois" href=".html">Estatísticas</a>&nbsp;&nbsp;
        <?php
                    session_start();
                    if (!isset($_SESSION["logou"]))
                    {
                        echo "<a class='dois' href='login.php'>Login</a>&nbsp;&nbsp;
                        <br><br>";
                    }
                    else{
                      echo "<a class='dois' href='login.php'>Info </a>&nbsp;&nbsp;
                        <br><br>";
                    }
                    ?>
        
        <a class="tres" href="#topo">Clique para voltar ao topo</a>
        <br> <br>
    </div>
    <br><br>
    05 - Ellen Lorenz Vieira Antonetti 13 - Italo C. Martins Bresciani 18 - Laura Lima Denardi 26 - Nathan
    Braian Mariano Anunciação 34 - Ulisses Rodrigues Barreto
    <br>
    </div>
    </div>


  </center>



</body>

</html>