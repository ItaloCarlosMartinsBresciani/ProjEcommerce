<?php
  session_start();
  include "conexao.php";
  $login = $_POST['login'];
  $sqlnome="SELECT nome FROM usuario WHERE email  = '$login';";
  $sqlemail="SELECT email FROM usuario WHERE email  = '$login';";
  $sqlcpf="SELECT cpf FROM usuario WHERE email  = '$login';";
  $sqlsenha="SELECT senha FROM usuario WHERE email  = '$login';";
  $sqladm="SELECT adm FROM usuario WHERE email  = '$login';";
  $sqlendereco="SELECT endereco FROM usuario WHERE email  = '$login';";
  

?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="imagem/icon.png">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/estilos.css" />
  <script src="https://kit.fontawesome.com/8545ffdfda.js" crossorigin="anonymous"></script>
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
        <a class="um" href="index.html">Home <i class="fas fa-home"></i></a>&nbsp;&nbsp;
        <a class="um" href="produtos.html">Produtos <i class="fas fa-desktop"></i></a>&nbsp;&nbsp;
        <a class="um" href=".html">Comprar <i class="fas fa-shopping-cart"></i></a>&nbsp;&nbsp;
        <a class="um" href="devs.html">Desenvolvedores <i class="fab fa-dev"></i></a>&nbsp;&nbsp;
        <a class="um" href=".html">Estatísticas</a>&nbsp;&nbsp;
        <a class="um" href="login.php">Login <i class="fas fa-sign-in-alt"></i></a>&nbsp;&nbsp;
        <br><br><br>
      </div>
      

          
  
      <header>
      <?php
        session_start();
        if (!isset($_SESSION["logou"]))
        {
          echo "<h1> Login <i class='fas fa-sign-in-alt'></i></h1>";
        }
        else {
          
        }
      ?>
        
    </header>
 
    
    <?php
        session_start();
        if (!isset($_SESSION["logou"]))
        {
          echo " <section> <div id='login'>
          
          <form action='php/cadastro.php' method='POST'>
              E-mail: <input type='email' name='login' size='20' placeholder='E-mail' ><br><br>
            
              Senha: <input type='password' name='senha' placeholder='Senha' ><br><br>
              <input type='submit' value='Logar'>
          </form>
                </div>
            </section>

            <footer>
                <p>Ainda não tem uma conta? <a href='cadastro2.html' target='_blank'>Cadastre-se...</a></p>
            </footer>
          ";
        }
        else {
          echo " <section>
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
        
            Desejar sair???
            <input type='submit' value='Sair'>
        
          </section>
          ";
        }
      ?>
        



        









    <div id="camada3">
        <br>
        <a class="dois" href="index.html">Home</a>&nbsp;&nbsp;
        <a class="dois" href="produtos.html">Produtos</a>&nbsp;&nbsp;
        <a class="dois" href=".html">Comprar</a>&nbsp;&nbsp;
        <a class="dois" href="devs.html">Desenvolvedores</a>&nbsp;&nbsp;
        <a class="dois" href=".html">Estatísticas</a>&nbsp;&nbsp;
        <a class="dois" href="login.php">Cadastro</a>&nbsp;&nbsp;
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


</body>
</html>