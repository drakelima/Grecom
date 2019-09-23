<?php
	ob_start();

	global $raiz, $local_url, $local_site, $email_grecom, $email_contato, $classe_cor, $area;

	$raiz = "";
	$classe_cor = "verde"; //azul, verde, laranja, amarelo, lilas (padrao vermelho eh vazio)
	$area = "Novidades";

	if (isset($_GET['id']) or $_GET['id'] != '')
		$id = $_GET['id'];
	else {
		header("location: novidades.php");
		exit;
	}

	include "inc/cabecalho.php";
	include "inc/estilo_internas.php";
	include "inc/topo.php";
	include "inc/corpo.php";

	foreach (simplexml_load_file($local_url . $local_site . "evento/xml/".$id)->item as $item) {
		$titulo = $item->titulo;
		$descricao = $item->descricao;
		$dataI = strftime("%d/%m/%Y", strtotime($item->dataInicio));
		$dataF = strftime("%d/%m/%Y", strtotime($item->dataFim));

		if ($dataF != $dataI)
			$periodo = $dataI." a ".$dataF;
		else
			$periodo = $dataI;

		$local = $item->local;
		$email = $item->email;
		$telefone = $item->telefone;
		$site = $item->site;
		$links = $item->outrasUrls;
		$imagem = $item->imagem;

		$titulo_a = $item->nomeArquivo;
		$arquivo = $item->arquivo;

		if ($arquivo != 'null' and $arquivo != NULL) {
			if ($titulo_a != 'null' and $titulo_a != NULL)
				$texto_arquivo = $titulo_a;
			else
				$texto_arquivo = 'Clique aqui para baixar!';
		} else
			$texto_arquivo = '';
	}
?>

                <div id="migalha">
					<a href="index.php">Home</a> &raquo; <a href="novidades.php"><?=$area?></a> &raquo; <?=$titulo?>
                </div>
                <div id="conteudo">
                    <h2><?=$titulo?></h2>
<?
	if ($imagem != 'null') {
?>
                        <span class="img-evento aumenta">
                            <a href="<?=$imagem?>" title="<?=$titulo?>">
                                <img src="<?=$imagem?>" title="Clique para ampliar a imagem!" />
                            </a>
                        </span>
<?
	}
?>
					<p>
                        <strong>Período:</strong> <?=$periodo?><br />
<?
	if ($local != '') {
?>
                        <strong>Local:</strong> <?=$local?><br />
<?
	}

	if ($telefone != '') {
?>
						<strong>Telefone(s):</strong> <?=$telefone?><br />
<?
	}

	if ($email != '') {
?>
	                    <strong>E-mail:</strong> <a href="mailto:<?=$email?>"><?=$email?></a><br />
<?
	}

	if ($site != '') {
?>
						<strong>Site:</strong> <a href="<?=$site?>" target="_blank"><?=$site?></a><br />
<?
	}

	if ($links != '' and $links != 'null') {
?>
						<strong>Outros links:</strong> <?=$links?>
<?
	}
?>
                    </p>
                    <p>
						<?=nl2br($descricao)?>
<?
	if ($texto_arquivo != '') {
?>
						<br /><br />
						<strong>Arquivo em anexo:</strong> <a href="<?=$arquivo?>" title="Baixe aqui o arquivo!" target="_blank"><?=$texto_arquivo?></a>
<?
	}
?>
                    </p>

                    <span class="rodape-noticia">
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