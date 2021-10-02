<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="imagem/icon.png">
  <title>Login</title>
  
  <link rel="stylesheet" type="text/css" href="css/form.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/8545ffdfda.js" crossorigin="anonymous"></script>
</head>

<body>
<?php
        session_start();
        if (!isset($_SESSION["logou"]))
        {
          echo "<div id='login-container'>
          <h1><i class='fas fa-user-plus'></i> Login</h1>
          <form action='php/cadastro.php' method='POST'>
          
            <label for='email'>E-mail</label>
            <input type='email' name='login' id='login' placeholder='Digite seu e-email'>
      
            <label for='password'>Senha</label>
            <input type='password' name='senha' id='senha' placeholder='Digite sua senha'>
          
            
            <p>Ainda não tem uma conta? <a href='cadastro2.html'>Cadastre-se...</a></p>
            
            <input type='submit' value='Login'>
          </form>
          <form action='index.php' method='POST'>
          <input type='submit' value='Voltar'>
          </form>
        </div>";
        }
       else{

         
        echo " 
        <link rel='stylesheet' type='text/css' href='css/estilos.css' />
        <center>
        <div id='mae2'>
    
          <br>
          <a name='topo'></a>

          
                    
              
                
          <div id='camada1'>
            <br>
            <a href='index.php'><img id='user' src='imagem/user.png'></a>
            <br><br>";
            
                    session_start();
                    include "php/adm.php";
                    $adm = isMaster();
                    if($adm){
                        echo "<a href='tabelas_usu.php'><i class='fas fa-cogs'></i></a>";
                         }
                echo "  
            <a class='um' href='index.php'>Home <i class='fas fa-home'></i></a>&nbsp;&nbsp;
            <a class='um' href='produtos.php'>Produtos <i class='fas fa-desktop'></i></a>&nbsp;&nbsp;
            <a class='um' href='.html'>Comprar <i class='fas fa-shopping-cart'></i></a>&nbsp;&nbsp;
            <a class='um' href='devs.php'>Desenvolvedores <i class='fab fa-dev'></i></a>&nbsp;&nbsp;
            <a class='um' href='.html'>Estatísticas</a>&nbsp;&nbsp;
            <a class='um' href='login.php'>Info <i class='fas fa-info'></i></a>&nbsp;&nbsp;
            <br><br><br>
          </div>
          
        
        <br><br><br>

        <section>
        <h1><i class='fas fa-info-circle'></i> Informações da conta</h1>
        <fieldset>
        <label> 
        <i class='fas fa-user'></i> <p>".$sqlnome."</p>
        </label>
        <label> 
        <i class='fas fa-user'></i> <p>".$sqlemail."</p>
        </label>
        <label> 
        <i class='fas fa-user'></i> <p>".$sqlcpf."</p>
        </label>
        <label> 
        <i class='fas fa-user'></i> <p>".$sqlsenha."</p>
        </label>
        <label> 
        <i class='fas fa-user'></i> <p>".$sqlendereco."</p>
        </label>
        <label> 
        <i class='fas fa-user'></i> <p>".$sqladm."</p>
        </label>
        </fieldset>
        <form action='php/logoff.php' method='POST'>
      
          
          <input type='submit' value='Sair'>
      
        </section>
        <br><br><br>
        <div id='camada3'>
        <br>
        <a class='dois' href=index.php'>Home</a>&nbsp;&nbsp;
        <a class='dois' href='produtos.php'>Produtos</a>&nbsp;&nbsp;
        <a class='dois' href='.html'>Comprar</a>&nbsp;&nbsp;
        <a class='dois' href='devs.php'>Desenvolvedores</a>&nbsp;&nbsp;
        <a class='dois' href='.html'>Estatísticas</a>&nbsp;&nbsp;
        <a class='dois' href='login.php'>Info</a>&nbsp;&nbsp;
        <br><br>
        <a class='tres' href='#topo'>Clique para voltar ao topo</a>
        <br> <br>
    </div>
    <br><br>
    05 - Ellen Lorenz Vieira Antonetti 13 - Italo C. Martins Bresciani 18 - Laura Lima Denardi 26 - Nathan
    Braian Mariano Anunciação 34 - Ulisses Rodrigues Barreto
    <br>
 
    </div>
  </center>


        ";
       }
      ?>
  









</body>
</html>