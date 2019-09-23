<?php
	ob_start();

	global $raiz, $local_url, $local_site, $email_grecom, $email_contato, $classe_cor, $area;

	$raiz = "";
	$classe_cor = "amarelo"; //azul, verde, laranja, amarelo, lilas (padrao vermelho eh vazio)
	$area = "Publicações";

	if (isset($_GET['id']) and $_GET['id'] != '')
		$id = $_GET['id'];
	else {
		header("location: publicacoes.php");
		exit;
	}

	include "inc/cabecalho.php";
	include "inc/estilo_internas.php";
	include "inc/topo.php";
	include "inc/corpo.php";

	//setando o xml os documentos da categoria selecionada
	$xml_documento = simplexml_load_file($local_url . $local_site . "documento/xml/".$id);

	$verifica = $xml_documento->item[0];
	if ($verifica) {
		$titulo_categoria = $verifica->tituloPai;
		$categoria = $titulo_categoria;
	} else {
		$titulo_categoria = $area;
		$categoria = "Categoria vazia";
	}
?>

                <div id="migalha">
					<a href="index.php">Home</a> &raquo; <a href="publicacoes.php"><?=$area?></a> &raquo; <?=$categoria?>
                </div>
                <div id="conteudo">
					<h2><?=$titulo_categoria?></h2>
                    <p>Veja abaixo as publica&ccedil;&otilde;es disponilizadas para baixar desta categoria.</p>
<?
	if ($verifica) {
?>
                    <ul>
<?
		foreach ( $xml_documento->item as $link ) {
			//dados das categorias/documentos
			$id_sub = $link->id;
			$titulo_sub = $link->titulo;
			$arquivo_sub = $link->linkArquivo;
?>
                        <li>
<?
			if ($arquivo_sub == 'null' || $arquivo_sub == NULL) {
?>
                            <a title="<?=$titulo_sub?>" href="publicacao.php?id=<?=$id_sub?>"><?=$titulo_sub?></a>
<?
			} else {
?>
                            <a title="<?=$titulo_sub?>" href="<?=$arquivo_sub?>" target="_blank"><?=$titulo_sub?></a>
<?
			}
?>
                        </li>
<?
		}
?>
                    </ul>
<?
	} else {
?>
						<p><strong>Nenhuma publica&ccedil;&atilde;o foi encontrada nesta categoria.</strong></p>
<?
	}
?>
                    <p>
                    	<a href="javascript:history.back()">
                        	<strong>&laquo; Voltar</strong>
						</a>
                    </p>
				</div>

<?php
	include "inc/rodape.php";
?>