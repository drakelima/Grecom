<?php
	ob_start();

	global $raiz, $local_url, $local_site, $email_grecom, $email_contato, $classe_cor, $area;

	$raiz = "";
	$classe_cor = "laranja"; //azul, verde, laranja, amarelo, lilas (padrao vermelho eh vazio)
	$area = "Galerias";
	$titulo = "Vídeos";

	include "inc/cabecalho.php";
	include "inc/estilo_internas.php";
	include "inc/estilo_galerias.php";
	include "inc/topo.php";
	include "inc/corpo.php";

	//pegando os videos
	$xml_videos = simplexml_load_file($local_url . $local_site . "video/xml/");
?>

                <div id="migalha">
					<a href="index.php">Home</a> &raquo; <?=$area?> &raquo; <?=$titulo?>
                </div>
                <div id="conteudo">
					<h2><?=$titulo?></h2>
                    <p>Veja abaixo os v&iacute;deos dispon&iacute;veis do Grecom.</p>
<?
	$verifica_videos = $xml_videos->item[0]->id; //variavel de verificacao

	if ($verifica_videos) {
?>
					<div class="caixa-videos">
<?
		$cont = 0;
		foreach ($xml_videos->item as $item) {
			//dados dos videos
			$id = $item->id;
			$data = strftime("%d/%m/%Y", strtotime($item->criadoEm));
			$leg = $item->legenda;
			$img = $item->linkImagem;
?>
                        <!-- video -->
                        <div class="bg-galeria-video">
                            <a href="video.php?id=<?=$id?>">
                                <span class="video-album">
                                    <img src="<?=$img?>" />
                                    <span class="play-video"></span>
                                </span>
                                <div class="dados-video">
                                    <span class="data-video"><label><?=$data?></label></span>
                                    <span class="descricao-video">
                                        <?=$leg?>
                                    </span>
                                </div>
                            </a>
                        </div>
<?
			$cont++;
		}
?>
                    </div>
<?
	} else {
?>
                    <p>
                        <strong>Nenhum vídeo foi encontrado.</strong>
                    </p>
<?
	}
?>
				</div>

<?php
	include "inc/rodape.php";
?>