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

	$sql = "select c.IdCurso,
                   c.genero,
                   sum(iv.qtde) as qtdevendida
              from vendas v
                   inner join itensvenda iv
                on v.idvenda = iv.idvenda
                   inner join cursos c
                on c.IdCurso = iv.iditem 
             group by c.IdCurso,
                   c.genero
             order by qtdevendida desc, genero ";

	$res = pg_query($conecta, $sql);
	$qtde=pg_num_rows($res);	 
?>