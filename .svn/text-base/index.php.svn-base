<?php
	ob_start();

	global $raiz, $local_url, $local_site, $email_grecom, $email_contato, $classe_cor;

	$raiz = "";
	$classe_cor = ""; //azul, verde, laranja, amarelo, lilas (padrao vermelho eh vazio)

	include "inc/cabecalho.php";
	include "inc/estilo_inicial.php";
	include "inc/topo.php";
	include "inc/corpo.php";

	//pegando o conteudo da home (resumo)
	$pagina = "resumo_inicial";
	$xml_resumo = $local_url . $local_site . "secao/xml/".$pagina;

	foreach (simplexml_load_file($xml_resumo)->item as $item_res) {
		$tit_res = $item_res->titulo;
		$resumo = $item_res->descricao;
	}

	//pegando as noticias - ativdades
	$xml_noticias = simplexml_load_file($local_url . $local_site . "noticia/xml/");

	//pegando os eventos - novidades
	$xml_eventos = simplexml_load_file($local_url . $local_site . "evento/xml/");

	//pegando apenas os albuns da galeria
	$xml_albuns = simplexml_load_file($local_url . $local_site . "galeria/xml/?album=true");

	//pegando os videos
	$xml_videos = simplexml_load_file($local_url . $local_site . "video/xml/");

	//endereco da enquete
	$url_iframe = $local_url . $local_site . "enquete/";
?>

				<div id="textoIndex">
                    <h2><?=$tit_res?></h2><br/>
                    <p>
                        <?=nl2br($resumo)?>
                	</p>
				</div>

				<div id="quadros"> 
					<!-- =================================================
                    	 QUADROS DE DESTAQUE
                         ================================================= -->
					<div class="quadro">
						<div class="quadro-topo">
							<div class="topo-titulo">
								<p class="titulo-quadro-destaques verde">Destaques</p>
							</div>
							<div class="topo-abrir-fechar">
								<a href="#" id="show1" class="abrirFechar" onclick="changeSrc('p-a1');"><img id="p-a1" alt="Fechar" src="<?=$raiz?>img/off.png" title="Fechar"></a>
							</div>
						</div>

                    	<!-- conteúdo das atividades -->
						<div class="destaques conteudo-quadro">
<?
	//verifica se ha atividades cadastradas
	$verifica = $xml_noticias->item[0];
	if ($verifica) {

		//lista as 2 primeiras
		$cont = 0;
		foreach ( $xml_noticias->item as $item ) {
			if ($cont < 2) {
				//dados das atividades
				$data = strftime("%d/%m/%Y", strtotime($item->data));
				$titulo = $item->titulo;
				$id = $item->id;
				$descricao = $item->descricao;
				$imagem = $item->imagem;
				$imagem_p = $item->imagemp;
?>
							<span class="noticia-destaque">
                                <span class="data-noticia">(<?=$data?>)</span><br/>
                                <span class="titulo-noticia"><?=$titulo?></span><br/>
                            	<a href="atividade.php?id=<?=$id?>">
<?
				if (($imagem_p != 'null' and $imagem_p != NULL)) {
?>
                                    <span class="img-noticia">
                                        <img class="img-quadro" src="<?=$imagem_p?>" alt="<?=$titulo?>"></img>
                                    </span>
<?
				} else if (($imagem != 'null' and $imagem != NULL)) {
?>
                                    <span class="img-noticia">
                                        <img class="img-quadro" src="<?=$imagem?>" alt="<?=$titulo?>"></img>
                                    </span>
<?
				}
?>
                                    <span class="texto-noticia"><?=$descricao?></span>
								</a>
                            </span>
<?
				$cont++;
			} else
				break;
		}
?>
                            <a href="atividades.php" class="link-quadro link_azul">mais atividades</a>
<?
	} else {
?>
							<p><strong>Nenhuma atividade foi encontrada.</strong></p>
<?
	}
?>
						</div>
					</div><!-- fim div quadro destaques-->

					<!-- =================================================
                    	 QUADROS DE NOVIDADES - EVENTOS
                         ================================================= -->
					<div class="quadro">
						<div class="quadro-topo">
							<div class="topo-titulo">
								<p class="titulo-quadro-eventos">Novidades</p>
							</div>
							<div class="topo-abrir-fechar">
								<a href="#" id="show2" class="abrirFechar" onclick="changeSrc('p-a2');"><img id="p-a2" alt="Abrir" src="<?=$raiz?>img/on.png" title="Abrir"></a>	
							</div>
						</div>

						<div class="eventos conteudo-quadro">
<?
	//verifica se ha novidades cadastradas
	$verifica_evento = $xml_eventos->item[0];
	if ($verifica_evento) {
?>
                        	<ul>
<?
		//lista os 4 primeiros (eventos)
		foreach ( $xml_eventos->item as $item_evento ) {
			if ($cont < 4) {
				$id_evento = $item_evento->id;
				$dataI = strftime("%d/%m", strtotime($item_evento->dataInicio));
				$dataF = strftime("%d/%m", strtotime($item_evento->dataFim));

				if ($dataF != $dataI)
					$periodo = $dataI." a ".$dataF;
				else
					$periodo = $dataI;

				$titulo_evento = $item_evento->titulo;
?>
								<li class="chamada-evento">
                                	<span class="color-verde data">(<?=$periodo?>)</span><br/>
     								<a href="novidade.php?id=<?=$id_evento?>" class="evento-data">
                                    	<?=$titulo_evento?>
                                    </a>
                            	</li>
<?
				$cont++;
			} else
				break;
		}
?>
                            </ul>
							<a href="novidades.php" class="link-quadro link_verde">mais novidades</a>
<?
	} else {
?>
							<p><strong>Nenhuma novidade foi encontrada.</strong></p>
<?
	}
?>
						</div>
					</div><!-- fim div quadro eventos -->

					<!-- =================================================
                    	 QUADROS DE GALERIAS
                         ================================================= -->
					<div class="quadro">
						<div class="quadro-topo">
							<div class="topo-titulo">
								<p class="titulo-quadro-galerias">Galerias</p>
							</div>
							<div class="topo-abrir-fechar">
								<a href="#" id="show3" class="abrirFechar" onclick="changeSrc('p-a3');"><img id="p-a3" alt="Abrir" src="<?=$raiz?>img/on.png" title="Abrir"></a>	
							</div>
						</div>

						<div class="galerias conteudo-quadro">

                            <!-- GALERIA DE FOTOS -->
                            <span class="galeria-bloco">
                            <span class="geleria-subtitulo">Fotos</span>
<?
	//verifica se ha albuns cadastrados
	$verifica_albuns = $xml_albuns->item[0]->id;
	if ($verifica_albuns) {

		$cont = 0;

		foreach ($xml_albuns->item as $item_alb) {
			if ($cont < 3) {
				//dados dos albuns/fotos
				$id_alb = $item_alb->id;
				$data_alb = strftime("%d/%m/%Y", strtotime($item_alb->dataCadastro));
				$titulo_alb = $item_alb->titulo;
				$img = $item_alb->linkImagemGrd;
				$img_peq = $item_alb->linkImagemPeq;

				if ($img_peq != 'null' and $img_peq != NULL)
					$area_img = $img_peq;
				else
					$area_img = $img;
?>
                                <!-- album -->
                                <span class="foto">
                                    <a href="foto.php?id=<?=$id_alb?>" title="<?=$titulo_alb?>">
                                        <span class="bg-foto">
                                            <img src="<?=$area_img?>"/>
                                        </span>
                                        <span class="data-foto"><?=$data_alb?></span>
                                    </a>
                                </span>
<?
				$cont++;

			} else
				break;
		}
?>
							</span>
                            <a href="fotos.php" class="link-quadro link_laranja" title="Mais imagens">mais fotos</a>
<?
	} else {
?>
								<p class="msg-quadro">Nenhum álbum de foto foi encontrado.</p>
                            </span>
<?
	}
?>
                         	<br/>

                            <!-- GALERIA DE VIDEOS -->
                            <span class="galeria-bloco">
                                <span class="galeria-linha"></span>
                                <span class="geleria-subtitulo">Vídeos</span>
<?
	//verifica se ha albuns cadastrados
	$verifica_videos = $xml_videos->item[0]->id;
	if ($verifica_videos) {

		$cont = 0;

		foreach ($xml_videos->item as $item_vid) {
			if ($cont < 3) {
				//dados dos videos
				$id_vid = $item_vid->id;
				$data_vid = strftime("%d/%m/%Y", strtotime($item_vid->criadoEm));
				$leg_vid = $item_vid->legenda;
				$img_vid = $item_vid->linkImagem;
?>
                                <!-- video -->
                                <div class="bg-galeria-video">
                                    <a href="video.php?id=<?=$id_vid?>" class="link-galeria">
                                        <span class="video-album">
                                            <img src="<?=$img_vid?>">
                                            <span class="play-video"></span>
                                        </span>
                                        <div class="dados-video">
                                            <span class="data-video"><?=$data_vid?></span>
                                            <span class="descricao-video">
	                                            <?=$leg_vid?>
                                            </span>
                                        </div>
                                    </a>
                                </div>
<?
				$cont++;

			} else
				break;
		}
?>
							</span>
 							<a href="videos.php" class="link-quadro link_laranja" title="Mais imagens">mais vídeos</a>
<?
	} else {
?>
								<p class="msg-quadro">Nenhum vídeo foi encontrado.</p>
                            </span>
<?
	}
?>
						</div>
					</div><!-- fim div quadro galerias --> 

					<!-- =================================================
                    	 QUADROS DE ENQUETE
                         ================================================= -->
					<div class="quadro">
						<div class="quadro-topo">
							<div class="topo-titulo">
								<p class="titulo-quadro-enquete">Enquete</p>
							</div>
							<div class="topo-abrir-fechar">
								<a href="#" id="show4" class="abrirFechar" onclick="changeSrc('p-a4');"><img id="p-a4" alt="Abrir" src="<?=$raiz?>img/on.png" title="Abrir"></a>	
							</div>
						</div>	
						<div class="enquete conteudo-quadro">
                            <iframe scrolling="auto" frameborder="0" width="100%" height="190px" src="<?=$url_iframe?>">
                            </iframe>
                            <!-- Formulario enquete
                            <p>
                                Aponte o grau de satisfação das publicações GRECOM 2011?
                            </p>
                            <br/>
                            <form id="formEnqueteVotacao">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="radio" name="enquete"/> <label>Excelente</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="enquete"/> <label>Bom</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="enquete"/> <label>Regular</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="enquete" /> <label>Ruim</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="enquete"/> <label>Péssimo</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>
                                                <br/>
                                                <input class="btn-voto" type="button" value="Votar" title="Votar" alt="Votar"/>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </form>
                            -->
                        </div>
					</div><!-- fim div quadro enquete -->

				</div><!-- fim div quadros-->

<?php
	include "inc/rodape.php";
?>