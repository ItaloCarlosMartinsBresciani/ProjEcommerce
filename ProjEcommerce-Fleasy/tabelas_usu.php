<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração de usuário</title>
    <script src="https://kit.fontawesome.com/8545ffdfda.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/tabelas.css" />
</head>
<body>

<div id="login-container">
    <header>
        <h1>Tabela de usuários <i class="fas fa-table"></i></h1><br>

        <div style="text-align: left; float: left;"><a href="index.php"><i class="fas fa-arrow-circle-left"></i> Voltar</a></div> 
        <div style="text-align: right;"> <a href="tabelas_prod.php">Tabelas de Produtos <i class="fas fa-arrow-circle-right"></i></a> </div>
    
        
        
        
    </header>
    <?php
            include "php/conexao.php";
            
            echo ' <div id = "pesquisa"><form method="GET" action="php/pesquisa_tabela.php">
            Pesquisar <input type="textbox" name="pesquisa" required> 
            
            <input type="radio" name="opcao" value="1" checked> Nome &nbsp;&nbsp;
            <input type="radio" name="opcao" value="2"> CPF &nbsp;&nbsp;

            <br>
            <input type="submit" value="Pesquisar">&nbsp &nbsp
            <input type="reset" value="Limpar"></div> 
        
    </form>';
            

            
            
            $sql="SELECT * FROM usuario WHERE excluido ='false' ORDER BY idusuario";
            $resultado= pg_query($conecta, $sql);
            $qtde=pg_num_rows($resultado);

            echo "<br><br><br><br><br><br><br><br><br><table class='content-table'>
            <thead>
                <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>CEP</th>
                <th>Telefone</th>
                <th>Edição</th>
                </tr>
            </thead>
           </table>";

            for ($cont=0; $cont < $qtde; $cont++) {
               $linha=pg_fetch_array($resultado);

            echo "<table class='content-table'>";
            echo "<tbody>";
            echo "<tr>";
            
                echo "<td>".$linha['idusuario']."</td>"; 
                echo "<td>".$linha['nome']."</td>";
                echo "<td>".$linha['email']."</td>";
                echo "<td>".$linha['cpf']."</td>";
                echo "<td>".$linha['cep']."</td>";
                echo "<td>".$linha['telefone']."</td>";
                echo "<td> <a href='php/edicao.php?idusuario=".$linha['idusuario']."'><i class='fas fa-pen'></i></a> &nbsp;  <a href='php/confirma_exclusao.php?idusuario=".$linha['idusuario']."'><i class='fas fa-trash'></i></a>  </td>"; 
                


                echo "</tr>";
                
                echo "</tbody>";
                echo "</table>";
            } 
             
        
 
 pg_close($conecta);
?>
</div>
</body>
</html>