<?php
	//Conecta com o PostgreSQL
    //
    // É preciso alterar o nome do banco, usuário e senha
    /* Do Victor 
	$conecta = pg_connect("host=kesavan.db.elephantsql.com port=5432 dbname=ugvahmme 
		user=ugvahmme password=YedTuKxrkRJMIUQzZlWEHEiMLUiZfnIb"); 
	*/
		$conecta = pg_connect(
			"host=kesavan.db.elephantsql.com port=5432 dbname=epmmpnjf user=epmmpnjf password=n61RM3DiYC2lHiVJ20LCHh5itky1ZKam"); 

	if (!$conecta)
	{
		echo "Não foi possível estabelecer conexão com o banco de dados!<br><br>";
		exit;
	}
?>
