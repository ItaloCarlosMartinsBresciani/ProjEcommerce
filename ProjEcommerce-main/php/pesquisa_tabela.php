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
        <h1>Tabela de usuários <i class="fas fa-table"></i></h1><br>

        <div style="text-align: left; float: left;"><a href="../tabelas_usu.php"><i class="fas fa-arrow-circle-left"></i> Voltar</a></div> 
        
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
                $sql="select * from usuarios
                where lower(nome) like '$x' and excluido != 'true'
                order by nome";
                break; 

                case 2: $cod="$pesquisa"; 
                $sql="select * from usuarios where cpf = '$cod' 
                and excluido != 'true' order by cpf";
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
        
        }
        else{
            echo "<script>alert('Nenhum usuário encontrado');</script>";
            echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../tabelas_usu.php'>";
        }


?>
</div>
</body>
</html>