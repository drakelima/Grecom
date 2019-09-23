<?php
	ob_start();

	global $raiz, $local_url, $local_site, $email_grecom, $email_contato, $classe_cor, $area;

	$raiz = "";
	$classe_cor = "laranja"; //azul, verde, laranja, amarelo, lilas (padrao vermelho eh vazio)
	$area = "Galerias";
	$titulo = "Álbum de Fotos";

	if (isset($_GET['id']) or $_GET['id'] != '')
		$id = $_GET['id'];
	else {
		header("location: fotos.php");
		exit;
	}

	include "inc/cabecalho.php";
	include "inc/estilo_internas.php";
	include "inc/estilo_galerias.php";
	include "inc/topo.php";
	include "inc/corpo.php";

	//pegando o album escolhido
	$xml_galeria = simplexml_load_file($local_url . $local_site . "galeria/xml/" . $id);
?>

                <div id="migalha">
					<a href="index.php">Home</a> &raquo; <a href="fotos.php"><?=$area?></a> &raquo; <?=$titulo?>
                </div>
                <div id="conteudo">
<?
	$verifica_galeria = $xml_galeria->item[0]->id; //variavel de verificacao

	if ($verifica_galeria) {

		$cont = 0;
		$cont_album = 0;
		$valida_album = "";

		foreach ($xml_galeria->item as $item) {
			//dados do album e suas fotos
			$tit_pai = $item->tituloPai;
			$data_pai = strftime("%d/%m/%Y", strtotime($item->dataCadastroPai));
			$des_pai = $item->descricaoPai;
			if ($des_pai == "")
				$descricao = "Não foi informada";
			else
				$descricao = $des_pai;

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

			if ($cont == 0) { //verifica o inicio do album para mostrar os dados dele
?>
					<h2>Informa&ccedil;&otilde;es do &aacute;lbum e suas fotos</h2>

                    <p>
                    	<strong>Título:</strong> <?=$tit_pai?><br/>
                    	<strong>Data:</strong> <?=$data_pai?><br/>
                    	<strong>Descrição:</strong> <?=$descricao?><br/>
                    </p>
<?
			}

			//verifica se nao eh um novo album (filho) para mostrar as fotos do album pai
			if ($album == "false") {

				if (strcmp($valida_album, $album) != 0) { //inicia a area de visualizacao das fotos
					$valida_album = $album;
?>
                    <!-- inicio das fotos -->
                    <div class="caixa-fotos">
<?
				}

				if ($fonte != '' and $fonte != 'null' and $fonte != NULL)
					$legenda = $titulo.' - '.$fonte;
				else
					$legenda = $titulo;
?>
                        <span class="foto aumenta">
                        	<a href="<?=$img?>" title="<?=$legenda?>">
                                <span class="bg-foto">
                                    <img src="<?=$area_img?>"/>
                                </span>
                        	</a>
                        </span>
<?
			} else {
				if ($cont > 0 && $cont_album == 0) {
?>
                    </div>

                    <span class="rodape-album">
                    	<span class="compartilhar">
                        	<? include "inc/compartilhar.php"; ?>
                        </span>
                    </span> 
<?
				}

				if (strcmp($valida_album, $album) != 0) {
					$valida_album = $album;
?>
					<br />
                    <h2>Mais álbuns desta galeria</h2>

					<!-- lista dos albuns -->
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
				$cont_album++;
			}

			$cont++;
		}

		if ($cont_album == 0 and $cont > 0) {
?>
                    </div>

                    <span class="rodape-album">
                    	<span class="compartilhar">
                        	<? include "inc/compartilhar.php"; ?>
                        </span>
                    </span>
<?
		} else {
?>
                    </div>
<?
		}
	} else {
?>
					<h2>Informa&ccedil;&otilde;es do &aacute;lbum</h2>

                    <p>
                    	<strong>Nenhuma foto foi encontrada.</strong>
                    </p>
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