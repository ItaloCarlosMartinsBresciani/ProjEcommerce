<?php
    session_start();
    if (!isset($_SESSION["logou"]))
    {
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Pesquisa</title>
</head>
<body>
    <!-- script foi chamado de pesquisar.php -->
    <?php
        include "conectar.php";
    
        $opcao = $_GET["opcao"];
        $pesquisa = strtolower($_GET["pesquisa"]); //transforma texto em minÃºsculo
        
        if(!isset($opcao)) //se usuÃ¡rio nÃ£o quer usar filtro
            $sql="select * from produtos
                   where excluido != 's'
                   order by descricao";
    
        else //se usuÃ¡rio escolheu um dos dois filtros
        {
            switch ($opcao)
            {
                case 1: $x="$pesquisa%"; 
                $sql="select * from produtos
                where lower(descricao) like '$x' and excluido != 's'
                order by descricao";
                break; //no inÃ­cio

                case 2: $x="%$pesquisa%"; 
                $sql="select * from produtos
                where lower(descricao) like '$x' and excluido != 's'
                order by descricao";
                break; //em qualquer parte

                case 3: $cod="$pesquisa"; 
                $sql="select * from produtos where cod_fornecedor = '$cod' 
                and excluido != 's' order by descricao";
                break;

                case 4: $preÃ§o="$pesquisa";
                $sql="select * from produtos where preco < '$preÃ§o' 
                and excluido != 's' order by descricao";
                break;
            }
        
            
            /* funÃ§Ãµes sql: lower -> para transformar texto em minÃºsculo
            upper -> para transformar texto em maiÃºsculo */
        }
        $resultado= pg_query($conecta, $sql);
        $qtde=pg_num_rows($resultado);
        
        if ($qtde > 0)
        {
            echo "Produtos encontrados<br><br>";
            while($linha = pg_fetch_array($resultado)) //ou
                //for ($cont=0; $cont < $qtde; $cont++)
            {
                //$linha=pg_fetch_array($resultado);
                //echo "Codigo: $linha[0]<br>"; //usar com Ã­ndice numÃ©rico ou
                // do jeito abaixo com matriz associativa:
                echo "Codigo: ".$linha['cod_produto']."<br>";
                echo "DescriÃ§Ã£o: ".$linha['descricao']."<br>";
                echo "Qtde: ".$linha['qtde']."<br>";
                echo "PreÃ§o: ".$linha['preco']."<br>";
                echo "Fornecedor: ".$linha['cod_fornecedor']."<br>";
                echo
                "<a href='confirma_exclusao_logica.php?cod_produto=$linha[0]'>
                Excluir</a>&nbsp&nbsp";
                echo
                "<a href='manutencao.php?cod_produto=$linha[0]&tipo=ALTERAR'>
                Alterar</a><br><br>";
            }
        }
        else
            echo "NÃ£o foi encontrado nenhum produto!!!";
?>
</body>
</html>