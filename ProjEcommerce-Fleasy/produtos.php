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
      
      
      
      <div id="login-container">
      <header>
        <h1>Cursos <i class="fas fa-laptop-code"></i></h1> 
        <?php
            include "php/conexao.php";
            
            echo ' <div id = "pesquisa"><form method="GET" action="pesquisa_curso.php">
            Pesquisar <input type="textbox" name="pesquisa" required> 
            
            <input type="radio" name="opcao" value="1" checked> Nome &nbsp;&nbsp;
            <input type="radio" name="opcao" value="2"> Preço &nbsp;&nbsp;
            <input type="radio" name="opcao" value="3"> Gênero 
            <br>
            <input type="submit" value="Pesquisar">&nbsp &nbsp
            <input type="reset" value="Limpar"></div> 
        
    </form>';?>
      </header>

      
      <?php
            include "php/conexao.php";
            $sql="SELECT * FROM cursos WHERE excluido ='false' ORDER BY idcurso";
            $resultado= pg_query($conecta, $sql);
            $qtde=pg_num_rows($resultado);
            
            
            for ($cont=0; $cont < $qtde; $cont++) {
              $linha=pg_fetch_array($resultado);

           echo "<table class='content-table'>";
           echo "<tbody>";
           echo "<tr>";

           echo '<td><div id="texto_produto1"><br>
           <img src="'.$linha["imagem"].'" width="190px" height="120px">
           <br>
                    '.$linha["nomecurso"].' (R$'.$linha["preco"].') <br><br>
             <a href="php/info_prod.php?idcurso='.$linha["idcurso"].'">Informações...</a>';
          
          
  
             if (!isset($_SESSION["logou"]))
             {
               echo '<form action="login.php" method="POST">
              <input type="submit" value="Comprar">
              </form></div></td>';
             }
             else{
              echo '<form action="carrinho.php?acao=add&idcurso='.$linha["idcurso"].'" method="POST">
              <input type="submit" value="Comprar">
              </form></div></td>';
             }
          
          
          

           echo "</tr>";
           
           echo "</tbody>";
           echo "</table>";
           } 
            ?>
      


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