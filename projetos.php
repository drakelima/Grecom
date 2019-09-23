<?php
	ob_start();

	global $raiz, $local_url, $local_site, $email_grecom, $email_contato, $classe_cor, $area;

	$raiz = "";
	$classe_cor = "amarelo"; //azul, verde, laranja, amarelo, lilas (padrao vermelho eh vazio)
	$area = "Projetos";

	//verifica se GET do conteudo da pagina foi setado
	if (isset($_GET['a']) and $_GET['a'] != '') {
		$pagina = $_GET['a'];
		$sufixo = substr($pagina, 0, 2);

		if ($sufixo != "p_") { //projetos
			header("location: index.php");
			exit;
		}

	} else {
		header("location: index.php");
		exit;
	}

	include "inc/cabecalho.php";
	include "inc/estilo_internas.php";
	include "inc/topo.php";
	include "inc/corpo.php";

	//pegando o conteudo da pagina
	$url = $local_url . $local_site . "secao/xml/".$pagina;

	foreach (simplexml_load_file($url)->item as $item) {
		$titulo = $item->titulo;
		$texto = $item->descricao;
	}
?>

                <div id="migalha">
					<a href="index.php">Home</a> &raquo; <?=$area?> &raquo; <?=$titulo?>
                </div>
                <div id="conteudo">
					<h2><?=$titulo?></h2>
                    <?=$texto?>
				</div>

<?php
	include "inc/rodape.php";
?>