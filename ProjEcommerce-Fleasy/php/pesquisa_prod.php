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
    <link rel="stylesheet" type="text/css" href="../css/tabelas.css" />
</head>
<body>

<div id="login-container">
    <header>
        <h1>Tabela de cursos <i class="fas fa-table"></i></h1><br>

        <div style="text-align: left; float: left;"><a href="../tabelas_prod.php"><i class="fas fa-arrow-circle-left"></i> Voltar</a></div> 
        
    <br><br>
        
        
        
    </header>
    <div style="text-align: left; float: left;"><h1> Resultado(s) da pesquisa </h1></div><br><br>
<?php
    include "conexao.php";
    
    $opcao = $_GET["opcao"];
    $pesquisa = strtolower($_GET["pesquisa"]); 
    
    switch ($opcao)
            {
                case 1: $x="%$pesquisa%"; 
                $sql="select * from cursos
                where lower(nomecurso) like '$x' and excluido != 'true'
                order by nomecurso";
                break; 

                case 2: $cod="$pesquisa"; 
                $sql="select * from cursos where preco = '$cod' 
                and excluido != 'true' order by preco";
                break; 
                
                case 3: $x="%$pesquisa%"; 
                $sql="select * from cursos
                where lower(genero) like '$x' and excluido != 'true'
                order by genero";
                break; 

                case 4: $x="%$pesquisa%"; 
                $sql="select * from cursos
                where lower(criador) like '$x' and excluido != 'true'
                order by criador";
                break; 
            }
        
            
        
        $resultado= pg_query($conecta, $sql);
        $qtde=pg_num_rows($resultado);
        
        if ($qtde > 0)
        {
           
            
            
                echo "<table class='content-table'>
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
        
        }
        else{
            echo "<script>alert('Nenhum curso encontrado');</script>";
            echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../tabelas_prod.php'>";
        }


?>
</div>
</body>
</html>