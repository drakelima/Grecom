<?php
	ob_start();

	global $raiz, $local_url, $local_site, $email_grecom, $email_contato, $classe_cor, $area;

	$raiz = "";
	$classe_cor = "amarelo"; //azul, verde, laranja, amarelo, lilas (padrao vermelho eh vazio)
	$area = "Publicações";

	include "inc/cabecalho.php";
	include "inc/estilo_internas.php";
	include "inc/topo.php";
	include "inc/corpo.php";

	//setando o xml dos documentos (na raiz)
	$xml_documentos = simplexml_load_file($local_url . $local_site . "documento/xml/");
?>

                <div id="migalha">
					<a href="index.php">Home</a> &raquo; <?=$area?>
                </div>
                <div id="conteudo">
					<h2><?=$area?></h2>
                    <p>Aqui você encontrará todas as publicações disponíveis para baixar.</p>
<?
	$verifica = $xml_documentos->item[0];
	if ($verifica) {
?>
                    <ul>
<?
		foreach ( $xml_documentos->item as $link ) {
			//dados das categorias/documentos
			$id = $link->id;
			$titulo_link = $link->titulo;
			$arquivo = $link->linkArquivo;
?>
                        <li>
<?
			if ($arquivo == 'null' || $arquivo == NULL) {
?>
                            <a title="<?=$titulo_link?>" href="publicacao.php?id=<?=$id?>"><?=$titulo_link?></a>
<?
			} else {
?>
                            <a title="<?=$titulo_link?>" href="<?=$arquivo?>" target="_blank"><?=$titulo_link?></a>
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
					<p><strong>Nenhuma publica&ccedil;&atilde;o foi encontrada.</strong></p>
<?
	}
?>
				</div>

<?php
	include "inc/rodape.php";
?>