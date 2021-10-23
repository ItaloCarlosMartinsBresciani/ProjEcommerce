<?php
      session_start();
       
      if(!isset($_SESSION['carrinho'])){
         $_SESSION['carrinho'] = array();
      }
       
      //adiciona produto
       
      if(isset($_GET['acao'])){
          
         //ADICIONAR CARRINHO
         if($_GET['acao'] == 'add'){
            $idcurso = intval($_GET['idcurso']); // Código do produto que vem da página index.php
            if(!isset($_SESSION['carrinho'][$idcurso])){
               $_SESSION['carrinho'][$idcurso] = 1;
            }else{
               $_SESSION['carrinho'][$idcurso] += 1;
            }
         }
          
         //REMOVER CARRINHO
         if($_GET['acao'] == 'del'){
            $idcurso = intval($_GET['idcurso']);
            if(isset($_SESSION['carrinho'][$idcurso])){
               unset($_SESSION['carrinho'][$idcurso]);
            }
         }
          
         //ALTERAR QUANTIDADE
         if($_GET['acao'] == 'up'){
            if(is_array($_POST['prod'])){
               foreach($_POST['prod'] as $idcurso => $qtd){
                  $idcurso  = intval($idcurso);
				  //desprezar a parte decimal
                  $qtd = intval($qtd);
                  if(!empty($qtd) && $qtd > 0){
                     $_SESSION['carrinho'][$idcurso] = $qtd;
                  }else{
                     unset($_SESSION['carrinho'][$idcurso]);
                  }
               }
            }
         }
       
		 // Modifica a url para remover qualquer uma das ações: add, del ou up, evita que a ação seja
		 // processada novamente caso a página seja recarregada
		 header("location:carrinho.php");

      }
       
       
?>



<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="imagem/icon.png">
  <title>Desenvolvedores</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
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
     
      <div id="login-container">
      <header>
        <h1>Carrinho de compras <i class="fas fa-cart-plus"></i></h1> 
        
      </header>



        <table class='content-table'>
		
		<thead>
			<tr>
				<th width="244">Produto</th>
				<th width="79">Quantidade</th>
				<th width="89">Preço (unidade)</th>
				<th width="100">Preço Total</th>
				<th width="64">Remover</th>
			</tr>
		</thead>

		<form action="?acao=up" method="post">

		<tfoot>
			<tr>
			<td colspan="5"><input type="submit" value="Atualizar Carrinho" ></td>
			<tr>
			<td colspan="5"><a href="produtos.php">Continuar Comprando</a></td>
			<tr>
			<td colspan="5"><a href="finalizacompra.php">Finalizar Compra</a></td>
		</tfoot>
		  
		<tbody>
		   <?php
			if(count($_SESSION['carrinho']) == 0)
			{
				echo '<tr><td colspan="5"><h1>Não há produto no carrinho</h1></td></tr>';
			}
			else
			{
				require("php/conexao.php");
				$total = 0;
				
				foreach($_SESSION['carrinho'] as $idcurso => $qtd)
				{ 
					$sql = "SELECT * FROM cursos WHERE idcurso=$idcurso AND	excluido = 'false' ORDER BY idcurso";
					$res = pg_query($conecta, $sql);
					$regs = pg_num_rows($res);
					if($regs>0)
					{
						$linha = pg_fetch_array($res);
						$nomecurso = $linha['nomecurso'];
						$preco = $linha['preco'];
						$sub = $preco * $qtd;
						$total += $sub;
						$preco = number_format($preco, 2, ',', '.');
						$sub = number_format($sub, 2, ',', '.');
					}
                    echo "<tr>";
            
                    echo "<td>".$nomecurso."</td>"; 
                    echo "<td> <input type='text' size='3' name='prod[".$idcurso."]' value='".$qtd."' ></td>";
                    echo "<td> R$".$preco."</td>";
                    echo "<td> R$".$sub."</td>";
                    echo "<td><a href='?acao=del&idcurso=".$idcurso."'>Remove</a></td>";
                
                    echo "</tr>";
					
				}
				 
				$total = number_format($total, 2, ',', '.');
            echo '<tr><td colspan="5" ><h1>Total:  R$ '.$total.' </h1></td>  </tr>';
				
			 }
		   ?>
		
		 </tbody>
			</form>
	</table>

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
</body>
</html>