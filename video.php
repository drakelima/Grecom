<?php
	ob_start();

	global $raiz, $local_url, $local_site, $email_grecom, $email_contato, $classe_cor, $area;

	$raiz = "";
	$classe_cor = "laranja"; //azul, verde, laranja, amarelo, lilas (padrao vermelho eh vazio)
	$area = "Galerias";
	$titulo = "Vídeo";

	if (isset($_GET['id']) or $_GET['id'] != '')
		$id = $_GET['id'];
	else {
		header("location: videos.php");
		exit;
	}

	include "inc/cabecalho.php";
	include "inc/estilo_internas.php";
	include "inc/estilo_galerias.php";
	include "inc/topo.php";
	include "inc/corpo.php";

	///pegando os dados do video selecionado
	foreach (simplexml_load_file($local_url . $local_site . "video/xml/" . $id)->item as $item) {
		//dados dos videos
		$id = $item->id;
		$data = strftime("%d/%m/%Y", strtotime($item->criadoEm));
		$leg = $item->legenda;
		$vid = $item->linkVideo;
	}
?>
	<!-- Js flowplayer -->
	<script type="text/javascript" src="<?=$raiz?>js/flowplayer-3.2.3.min.js"></script>

                <div id="migalha">
					<a href="index.php">Home</a> &raquo; <a href="videos.php"><?=$area?></a> &raquo; <?=$titulo?>
                </div>
                <div id="conteudo">
					<h2><?=$titulo?></h2>

                    <p><strong>Título:</strong> <?=$leg?></p>

                    <div id="videoarea">
                    	<span class="video">
                            <div class="video" id="<?=$id?>"></div>
							<script>
								$f("<?=$id?>", "swf/flowplayer-3.2.3.swf", {
									clip: {
										url: "<?=$vid?>", 
										autoPlay: false,
										autoBuffering: true
									},
									plugins: {
										controls: {
											volume:false,
											playlist:false,
											time:false
										}
									}
								});
                            </script>
                        </span>

                        <span class="data">(<?=$data?>)</span>
                        <span class="compartilhar">
                        	<? include "inc/compartilhar.php"; ?>
                        </span>
                    </div>

                    <p>
                    	<a href="javascript:history.back()">
                        	<strong>&laquo; Voltar</strong>
						</a>
                    </p>
				</div>

<?php
	include "inc/rodape.php";
?>