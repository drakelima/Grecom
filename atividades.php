<?php
	ob_start();

	global $raiz, $local_url, $local_site, $email_grecom, $email_contato, $classe_cor, $area;

	$raiz = "";
	$classe_cor = "azul"; //azul, verde, laranja, amarelo, lilas (padrao vermelho eh vazio)
	$area = "Eventos / Atividades";

	include "inc/cabecalho.php";
	include "inc/estilo_internas.php";
	include "inc/topo.php";
	include "inc/corpo.php";

	$xml_noticias = simplexml_load_file($local_url . $local_site . "noticia/xml/");
?>

                <div id="migalha">
					<a href="index.php">Home</a> &raquo; <?=$area?>
                </div>
                <div id="conteudo">
					<h2><?=$area?></h2>
                    <p>Aqui você encontrará todas as informações sobre nossos eventos/atividades.</p>
<?
	$verifica = $xml_noticias->item[0];
	if ($verifica) {
?>
                    <ul>
<?
		//lista as 30 primeiras
		$cont = 0;
		foreach ( $xml_noticias->item as $item ) {
			if ($cont < 30) {
				//dados das noticias
				$data = strftime("%d/%m/%Y", strtotime($item->data));
				$titulo = $item->titulo;
				$id = $item->id;
?>
                        <li>
                        	<strong><?=$data?></strong> - <a href="atividade.php?id=<?=$id?>"><?=$titulo?></a>
						</li>
<?
				$cont++;
			} else
				break;
		}
?>
                    </ul>
<?
	} else {
?>
						<p><strong>Nenhuma atividade foi encontrada.</strong></p>
<?
	}
?>
				</div>

<?php
	include "inc/rodape.php";
?>