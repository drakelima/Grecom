<?php
	ob_start();

	global $raiz, $local_url, $local_site, $email_grecom, $email_contato, $classe_cor, $area;

	$raiz = "";
	$classe_cor = ""; //azul, verde, laranja, amarelo, lilas (padrao vermelho eh vazio)
	$area = "Contato";

	include "inc/cabecalho.php";
	include "inc/estilo_internas.php";
	include "inc/topo.php";
	include "inc/corpo.php";

	if (isset($_POST['cp_nome'])) {

		// Pegar dados do $_POST
		$nome = $_POST['cp_nome'];

		$destino = $email_grecom.", ".$email_contato;

		$assunto = $_POST['cp_assunto'];
		$email = $_POST['cp_email'];

		$mensagem = "<strong>Assunto: ".$assunto."</strong><br /><br />".$_POST['cp_mensagem'];

		$assunto_externo = "[GRECOM] Contato do site";

		// Enviar o e-mail
		if (mail($destino, $assunto_externo, $mensagem, "Content-type: text/html; charset=utf-8\r\nFrom: $nome <$email>\r\n")) {
			header("Location: contato.php?msg=1");
		} else {
			header("Location: contato.php?msg=2");
		}

		exit;
	}
?>

                <div id="migalha">
					<a href="index.php">Home</a> &raquo; <?=$area?>
                </div>
                <div id="conteudo">
					<h2 class="titulo">Fale conosco</h2>

                    <p>
                    	<strong>Telefone:</strong> +55 (84) 3215-3525<br/>
                    	<strong>E-mail:</strong> <a href="mailto:<?=$email_contato?>"><?=$email_contato?></a><br/>
                    	<strong>Endereço para correspondência:</strong> Em breve<br/><br/>
                        Se deseja entrar em contato conosco para obter informações adicionais, esclarecer alguma dúvida ou fazer sugestões, preencha o formulário abaixo ou ligue para o telefone acima.
                    </p>

					<div class="formulario">
<?
	if (isset($_GET["msg"]) and ($_GET["msg"] > 0 and $_GET["msg"] < 3)) {

		//mensagens de envio
		$texto = array(
			1 => 'Mensagem enviada com sucesso!',
			2 => 'Erro ao enviar a mensagem. Por favor tente mais tarde!'
		);
?>
                        <div id="mensagemEnvio">
                            <b>*</b> <?=$texto[$_GET["msg"]]?>
                        </div>
<?
	}
?>
                        <form id="form_contato" name="form_contato" method="post" action="contato.php">
                            <span class="area-input-contato">
                                <label accesskey="1">Nome:</label>
                                <input type="text" id="cp_nome" name="cp_nome" value="" />
                            </span>

                            <span class="area-input-contato">
                                <label for="name" accesskey="2" class="padding-topo">E-mail:</label>
                                <input type="text" id="cp_email" name="cp_email" value="" onchange="validaEmail(this)" />
                            </span>

                            <span class="area-input-contato">
                                <label accesskey="3" class="padding-topo">Assunto:</label>
                                <input type="text" id="cp_assunto" name="cp_assunto" value="" />
                            </span>

                            <span class="area-contato-area">
                                <label for="name" accesskey="4" class="padding-topo">Mensagem:</label>
                                <textarea id="cp_mensagem" name="cp_mensagem" ></textarea>
                            </span>

                            <span class="area-contato-button">
	                            <button class="btn_enviar" type="button" onclick="verifContato()"></button>
                                <button class="btn_limpar" type="reset"></button>
                            </span>
                        </form>
					</div>

				</div>

<?php
	include "inc/rodape.php";
?>