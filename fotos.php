<?php
	ob_start();

	global $raiz, $local_url, $local_site, $email_grecom, $email_contato, $classe_cor, $area;

	$raiz = "";
	$classe_cor = "laranja"; //azul, verde, laranja, amarelo, lilas (padrao vermelho eh vazio)
	$area = "Galerias";
	$titulo = "Fotos";

	include "inc/cabecalho.php";
	include "inc/estilo_internas.php";
	include "inc/estilo_galerias.php";
	include "inc/topo.php";
	include "inc/corpo.php";

	//pegando os(as) albuns/fotos
	$xml_galerias = simplexml_load_file($local_url . $local_site . "galeria/xml/");
?>

                <div id="migalha">
					<a href="index.php">Home</a> &raquo; <?=$area?> &raquo; <?=$titulo?>
                </div>
                <div id="conteudo">
<?
	$verifica_galerias = $xml_galerias->item[0]->id; //variavel de verificacao

	if ($verifica_galerias) {

		$cont = 0;
		$valida_album = "";

		foreach ($xml_galerias->item as $item) {
			//dados dos albuns/fotos
			$album = $item->isAlbum;
			$id = $item->id;
			$data = strftime("%d/%m/%Y", strtotime($item->dataCadastro));
			$titulo = $item->titulo;
			$fonte = $item->descricao;
			$img = $item->linkImagemGrd;
			$img_peq = $item->linkImagemPeq;

			if ($img_peq != 'null' and $img_peq != NULL)
				$area_img = $img_peq;
			else
				$area_img = $img;

			if ($album == "true") {

				if (strcmp($valida_album, $album) != 0) {
					$valida_album = $album;
?>
					<h2>Nossos álbuns de fotos</h2>

                    <p>Selecione algum álbum para acessar maiores informações e visualizar todas as fotos dele.</p>

                    <!-- inicio dos albuns -->
					<div class="caixa-albuns"> 
<?
				}

				if (strlen($titulo) > 88)
					$titulo_tmp = substr($titulo, 0, 85)."...";
				else
					$titulo_tmp = $titulo;
?>
                        <!-- album -->
                        <div class="bg-galeria-foto">
                            <a href="foto.php?id=<?=$id?>">
                                <span class="foto-album">
                                    <img src="<?=$area_img?>"/>
                                    <span class="brilho-album"></span>
                                </span>
                                <div class="dados-galeria">
                                    <span class="data-galeria"><label><?=$data?></label></span>
                                    <span class="descricao-galeria">
                                        <?=$titulo_tmp?>
                                    </span>
                                </div>
                             </a>
                        </div>
<?
			} else {
				if ($cont > 0) {
?>
                    </div>

                    <span class="rodape-galeria-fotos"></span>
<?
				}

				if (strcmp($valida_album, $album) != 0) {
					$valida_album = $album;
?>
                    <h2>Mais fotos</h2>

                    <p>Clique nas imagens abaixo para ampliá-las.</p>

                    <div class="caixa-fotos">
<?
				}

				if ($fonte != '' and $fonte != 'null' and $fonte != NULL)
					$legenda = $titulo.' - '.$fonte;
				else
					$legenda = $titulo;
?>
                        <!-- fotos -->
                        <span class="foto aumenta">
                            <a href="<?=$img?>" title="<?=$legenda?>">
                                <span class="bg-foto">
                                    <img src="<?=$area_img?>"/>
                                </span>
                                <span class="data-foto"><label><?=$data?></label></span>
                            </a>
                        </span>
<?
			}

			$cont++;
		}
?>
                    </div>
<?
	} else {
?>
					<h2>&Aacute;lbuns e Fotos do Grecom</h2>

                    <p>
                    	<strong>Nenhum &aacute;lbum de foto foi encontrado.</strong>
                    </p>
<?
	}
?>
				</div>
<?php
	include "inc/rodape.php";
?>