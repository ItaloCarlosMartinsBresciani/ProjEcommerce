<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração de produtos</title>
    <script src="https://kit.fontawesome.com/8545ffdfda.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/tabelas.css" />
</head>
<body>

<div id="login-container">
    <header>
        <h1>Tabela de produtos <i class="fas fa-table"></i> <div style="text-align: right;"> <a href="php/cadastro_prod.html">Adicionar produto <i class="fas fa-plus-circle"></i></a> </div> </h1><br>

        <div style="text-align: left; float: left;"><a href="produtos.php"><i class="fas fa-arrow-circle-left"></i> Voltar</a></div> 
        <div style="text-align: right;"> <a href="tabelas_usu.php">Tabelas de usuários <i class="fas fa-arrow-circle-right"></i></a> </div>
    
        
        
        
    </header>
    <?php
            include "php/conexao.php";
            
            echo ' <div id = "pesquisa"><form method="GET" action="php/pesquisa_prod.php">
            Pesquisar <input type="textbox" name="pesquisa" required> 
            
            <input type="radio" name="opcao" value="1" checked> Nome &nbsp;&nbsp;
            <input type="radio" name="opcao" value="2"> Preço &nbsp;&nbsp;
            <input type="radio" name="opcao" value="3"> Gênero &nbsp;&nbsp;
            <input type="radio" name="opcao" value="4"> Criador &nbsp;&nbsp;
            <br>
            <input type="submit" value="Pesquisar">&nbsp &nbsp
            <input type="reset" value="Limpar"></div> 
        
    </form>';
            

            
            
            $sql="SELECT * FROM cursos WHERE excluido ='false' ORDER BY idcurso";
            $resultado= pg_query($conecta, $sql);
            $qtde=pg_num_rows($resultado);

            echo "<br><br><br><br><br><br><br><br><br><table class='content-table'>
            <thead>
                <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Aulas</th>
                <th>Gênero</th>
                <th>Criador</th>
                <th>Edição</th>
                </tr>
            </thead>
           </table>";

            for ($cont=0; $cont < $qtde; $cont++) {
               $linha=pg_fetch_array($resultado);

            echo "<table class='content-table'>";
            echo "<tbody>";
            echo "<tr>";
            
                echo "<td>".$linha['idcurso']."</td>"; 
                echo "<td>".$linha['nomecurso']."</td>";
                echo "<td>".$linha['preco']."</td>";
                echo "<td>".$linha['aulas']."</td>";
                echo "<td>".$linha['genero']."</td>";
                echo "<td>".$linha['criador']."</td>";
                echo "<td> <a href='php/edicao_prod.php?idcurso=".$linha['idcurso']."'><i class='fas fa-pen'></i></a> &nbsp;  <a href='php/confirma_exclusao_prod.php?idcurso=".$linha['idcurso']."'><i class='fas fa-trash'></i></a>  </td>"; 
                


                echo "</tr>";
                
                echo "</tbody>";
                echo "</table>";
            } 
             
        
 
 pg_close($conecta);
?>
</div>
</body>
</html>