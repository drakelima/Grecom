<?php
	ob_start();

	global $raiz, $local_url, $local_site, $email_grecom, $email_contato, $classe_cor, $area;

	$raiz = "";
	$classe_cor = "verde"; //azul, verde, laranja, amarelo, lilas (padrao vermelho eh vazio)
	$area = "Novidades";

	include "inc/cabecalho.php";
	include "inc/estilo_internas.php";
	include "inc/topo.php";
	include "inc/corpo.php";

	//pegando os eventos
	$xml_novidades = simplexml_load_file($local_url . $local_site . "evento/xml/");
?>

                <div id="migalha">
					<a href="index.php">Home</a> &raquo; <?=$area?>
                </div>
                <div id="conteudo">
					<h2><?=$area?></h2>
                    <p>Veja abaixo as novidades da GRECOM.</p>
<?
	$verifica_novidades = $xml_novidades->item[0]->id; //variavel de verificacao

	if ($verifica_novidades) {
?>
                    <ul class="listagem-evento">
<?
		$cont = 1;
		$temp_mesAno = "";
		foreach( $xml_novidades->item as $item ) {
			if ($cont % 2 == 0)
				$classe = "cor2";
			else
				$classe = "cor1";
	
			//dados dos eventos
			$id = $item->id;
			$mes = strftime("%m", strtotime($item->dataInicio));
			$ano = strftime("%Y", strtotime($item->dataInicio));
			$ver_mesAno = $meses[$mes]." - ".$ano;
	
			$dataI = strftime("%d/%m", strtotime($item->dataInicio));
			$dataF = strftime("%d/%m", strtotime($item->dataFim));
	
			if ($dataF != $dataI)
				$periodo = $dataI." a ".$dataF;
			else
				$periodo = $dataI;
	
			$titulo = $item->titulo;
	
			if ($temp_mesAno != $ver_mesAno) {
				$temp_mesAno = $ver_mesAno;
	
				if ($cont > 1) {
?>
							</ul>
                        </li>
<?
				}
?>
						<li class="li-listagem">
							<label class="mes"><?=$ver_mesAno?></label>
                            <ul class="agenda">
<?
			}
?>
                                <li class="<?=$classe?>">
                                    <a href="novidade.php?id=<?=$id?>">
                                    	<span class="periodo"><?=$periodo?></span>
                                        <span class="nome"><?=$titulo?></span>
                                    </a>
                                </li>
<?
			$cont++;
		}

		if ($cont > 1) {
?>
                            </ul>
                        </li>
<?
		}
?>
                    </ul>
<?
	} else {
?>
                    <p>
                        <strong>Nenhuma novidade foi encontrada.</strong>
                    </p>
<?
	}
?>
				</div>

<?php
	include "inc/rodape.php";
?>