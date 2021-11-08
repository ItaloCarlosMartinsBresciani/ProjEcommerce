<?php
	require "conexao.php";
   
/*
	$sql = "select  p.codproduto,
                   p.descricao,
                   sum(iv.qtde) as qtdevendida
              from venda v
                   inner join itemvenda iv
                on v.codvenda = iv.codvenda
                   inner join produto p
                on p.codproduto = iv.codproduto 
             group by p.codproduto,
                   p.descricao
             order by qtdevendida desc, descricao ";
 */

	$sql = "select c.idcurso,
                   c.descricao,
                   sum(iv.qtde) as qtdevendida
              from vendas v
                   inner join itensvenda iv
                on v.idvenda = iv.idvenda
                   inner join cursos c
                on c.idcurso = iv.iditem 
             group by c.idcurso,
                   p.descricao
             order by qtdevendida desc, descricao ";

	$res = pg_query($conecta, $sql);
	$qtde=pg_num_rows($res);	 
?>