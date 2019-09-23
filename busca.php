<?php
	ob_start();

	global $raiz, $local_url, $local_site, $email_grecom, $email_contato, $classe_cor, $area;

	$raiz = "";
	$classe_cor = ""; //azul, verde, laranja, amarelo, lilas (padrao vermelho eh vazio)
	$area = "Grecom";
	$titulo = "Busca Geral do Grecom";

	include "inc/cabecalho.php";
	include "inc/estilo_internas.php";
	include "inc/topo.php";
	include "inc/corpo.php";

	if (!isset($_POST['chave'])) {

		header("location: index.php");
		exit;

	} else {
		$chave = $_POST['chave'];
?>
		<script src="http://www.google.com.br/jsapi" type="text/javascript"></script>
        <script type="text/javascript"> 
			google.load('search', '1', {language : 'pt-BR', style : google.loader.themes.GREENSKY});
			google.setOnLoadCallback(function() {
				var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
					'003075121585300769612:pd9u0o21jpc', customSearchOptions);
				customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
				customSearchControl.draw('cse');
				customSearchControl.execute('<?=$chave?>');
			}, true);
        </script>

        <!-- Estilo busca (google) -->
	    <link rel="stylesheet" href="css/estilo_busca.css" type="text/css" />
<?
	}
?>

                <div id="migalha">
					<a href="index.php">Home</a> &raquo; <?=$area?> &raquo; <?=$titulo?>
                </div>
                <div id="conteudo">
					<h2><?=$titulo?></h2>
                    <div id="cse" class="cse">Carregando a busca</div>
				</div>

<?php
	include "inc/rodape.php";
?>