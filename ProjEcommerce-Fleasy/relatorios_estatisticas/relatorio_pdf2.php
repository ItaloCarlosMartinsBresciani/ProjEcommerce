<?php	
    $arquivocss = 'estilo'; // Não colocar extensão
    $titulo = "Categorias mais compradas";

    require "dados_relatorio.php";
 
    @include($arquivocss);

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	//Criando a Instancia
	$dompdf = new Dompdf();

    $html = '
        <div class="table">
            <div class="row header">
                <div class="cell titleColor">
                    ID Categoria 
                </div>
                <div class="cell titleColor">
                    Nome
                </div>
                <div class="cell titleColor">
                    Qtde
                </div>
            </div> ';

    if($qtde>0)
        while($linha = pg_fetch_array($res)){

            $html = $html.
                    '<div class="row">
                        <div class="cell">'
                            .$linha['IdCurso'].
                        '</div>
                        <div class="cell">'
                            .$linha['genero'].
                        '</div>
                        <div class="cell">'
                            .$linha['qtdevendida'].
                        '</div>
                    </div>';
    }
      
    $html = $html.'</div>';

    /* ---------------------------------------------------------*/

    /* Preparação do documento final
    */
    $documentTemplate = '
    <!doctype html> 
    <html> 
        <head>
            <link rel="stylesheet" href="'.$arquivocss.'.css" type="text/css">
        </head> 
        <body>
            <h1 style="text-align: center;">'.$titulo.'</h1>
            <br><br>
            <div id="wrapper">
                '.$html.'
            </div>
        </body> 
    </html>';

    //echo $documentTemplate;

	// Carrega seu HTML
	$dompdf->load_html($documentTemplate);

	//Renderizar o html
	$dompdf->render();

	// Exibir a página
	$dompdf->stream("relatorio.pdf", 
        array(
            "Attachment" => true 
        )
    );
?>