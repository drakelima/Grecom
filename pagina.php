<?php
	ob_start();

	global $raiz, $local_url, $local_site, $email_grecom, $email_contato, $classe_cor, $area;

	$raiz = "";
	$classe_cor = "lilas"; //azul, verde, laranja, amarelo, lilas (padrao vermelho eh vazio)

	//verifica se GET do conteudo da pagina foi setado
	if (isset($_GET['a']) and $_GET['a'] != '') {
		$pagina = $_GET['a'];
		$sufixo = substr($pagina, 0, 2);

		if ($sufixo != "l_") { //lilas
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

	$area = $titulo;
?>

                <div id="migalha">
					<a href="index.php">Home</a> &raquo; <?=$area?>
                </div>
                <div id="conteudo"<? if ($pagina == "l_amigos") { ?> class="amigos"<? } ?>>
					<h2><?=$titulo?></h2>
                    <?=$texto?>
				</div>

<?php
	include "inc/rodape.php";
?>