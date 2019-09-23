<?php
	ob_start();

	global $raiz, $local_url, $local_site, $email_grecom, $email_contato, $classe_cor, $area;

	$raiz = "";
	$classe_cor = "azul"; //azul, verde, laranja, amarelo, lilas (padrao vermelho eh vazio)
	$area = "Eventos / Atividades";

	//verifica se existe o ID da noticia
	if (isset($_GET['id']) or $_GET['id'] != '')
		$id = $_GET['id'];
	else {
		header("location: atividades.php");
		exit;
	}

	include "inc/cabecalho.php";
	include "inc/estilo_internas.php";
	include "inc/topo.php";
	include "inc/corpo.php";

	//pega os dados da notícia
	foreach (simplexml_load_file($local_url . $local_site . "noticia/xml/".$id)->item as $item) {
		$data = strftime("%d/%m/%Y &agrave;s %H:%M", strtotime($item->data));
		$titulo = $item->titulo;
		$descricao = $item->descricao;
		$imagem = $item->imagem;
		$imagem_p = $item->imagemp;
		$legenda = $item->legenda;
		$fonte = $item->fonte;

		if ($imagem_p != 'null' and $imagem_p != NULL)
			$area_img = $imagem_p;
		else if ($imagem != 'null' and $imagem != NULL)
				$area_img = $imagem;
			else
				$area_img = '';

		if ($legenda != 'null' and $legenda != NULL) {
			if ($fonte != 'null' and $fonte != NULL)
				$texto_legenda = $legenda . "<br>(Foto: " . $fonte . ")";
			else
				$texto_legenda = $legenda;
		} else
			$texto_legenda = '';

		$titulo_a = $item->tituloAnexo;
		$anexo = $item->anexo;

		if ($anexo != 'null' and $anexo != NULL) {
			if ($titulo_a != 'null' and $titulo_a != NULL)
				$texto_anexo = $titulo_a;
			else
				$texto_anexo = 'Clique aqui para baixar!';
		} else
			$texto_anexo = '';
	}
?>

                <div id="migalha">
					<a href="index.php">Home</a> &raquo; <a href="atividades.php"><?=$area?></a> &raquo; <?=$titulo?>
                </div>
                <div id="conteudo">
					<h2><?=$titulo?></h2>
<?
	if ($area_img != '') {
?>
                    <span class="img-texto aumenta">
                    	<a href="<?=$imagem?>" title="<?=$titulo?>">
                        	<img src="<?=$area_img?>" title="Clique aqui para ampliar a imagem!" />
                        </a>
<?
		if ($texto_legenda != '') {
?>
                        <label><?=$texto_legenda?></label>
<?
		}
?>
                    </span>
<?
	}
?>
                    <p>
                    	<?=nl2br($descricao)?>
<?
	if ($texto_anexo != "") {
?>
                        <br><br>
                        <strong>Arquivo em anexo:</strong> <a href="<?=$anexo?>" title="Baixe aqui o arquivo!" target="_blank"><?=$texto_anexo?></a>
<?
	}
?>
                    </p>

                    <span class="rodape-noticia">
                    	<strong>(<?=$data?>)</strong>
                    	<span class="compartilhar-texto">
                        	<? include "inc/compartilhar.php"; ?>
                        </span>
                    </span>

                    <p>
                    	<a href="javascript:history.back()">
                        	<strong>&laquo; Voltar</strong>
						</a>
                    </p>
				</div>

<?php
	include "inc/rodape.php";
?>