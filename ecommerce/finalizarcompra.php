<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="imagem/icon.png">
  <title>Produtos</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script src="https://kit.fontawesome.com/8545ffdfda.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>

  <center>
    <div id="mae3">

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
                        echo "<a href='tabelas_prod.php'><i class='fas fa-cogs'></i></a>";
                         }
                ?>
        <a class="um" href="index.php">Home <i class="fas fa-home"></i></a>&nbsp;&nbsp;
        <a class="oito" href="produtos.php">Produtos <i class="fas fa-desktop"></i></a>&nbsp;&nbsp;
        
        <?php
        
        if (!isset($_SESSION["logou"]))
        {
          echo '<a class="um" href="login.php">Carrinho <i class="fas fa-shopping-cart"></i></a>&nbsp;&nbsp;';
        }
        else{
            echo '<a class="um" href="carrinho.php">Carrinho <i class="fas fa-shopping-cart"></i></a>&nbsp;&nbsp;';
        }
        ?>
        <a class="um" href="estatisticas.php">Estatísticas <i class="fas fa-chart-bar"></i></a>&nbsp;&nbsp;
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
      
      <br><br>
      <section>
        <h1>Forma de pagamento <i class="fas fa-credit-card"></i></h1><br> <br> 
        
        <?php
            include "php/conexao.php";
            
            echo ' <div id = "pesquisa"><form method="GET" action="envemail.php"> 
            
            <input type="radio" name="opcao" value="1" checked> Cartão &nbsp;&nbsp;
            <input type="radio" name="opcao" value="2"> Boleto &nbsp;&nbsp;
            <input type="radio" name="opcao" value="3"> Pix 
            <br>
            <input type="submit" value="Comprar">&nbsp &nbsp
            </div> 
        
    </form>';?>
        </section>
      


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
                      echo "<a class='dois' href='login.php'>Logado </a>&nbsp;&nbsp;
                        <br><br>";
                    }
                    ?>
        
        <a class="tres" href="#topo">Clique para voltar ao topo</a>
        <br> <br>
    </div>
    <br><br>
    <p id="nomes">
    05 - Ellen Lorenz Vieira Antonetti 13 - Italo C. Martins Bresciani 18 - Laura Lima Denardi 26 - Nathan
    Braian Mariano Anunciação 34 - Ulisses Rodrigues Barreto
                  </p>
    <br>
    </div>
    </div>


  </center>



</body>

</html>