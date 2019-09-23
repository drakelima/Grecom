<?php
	header("Content-Type: text/html; charset=UTF-8",true);

	//dados do sistema
	$local_url = "http://www.sistemas.ufrn.br/gerenciadorportais/public/";
	$local_site = "grecom/";

	$email_grecom = "calmeida17@hotmail.com";
	$email_contato = "contato@grecom.ce.ufrn.br";

	//meses escritos
	$meses = array('01' => 'Janeiro', '02' => 'Fevereiro', '03' => 'Março', '04' => 'Abril', '05' => 'Maio', '06' => 'Junho', '07' => 'Julho', '08' => 'Agosto', '09' => 'Setembro', '10' => 'Outubro', '11' => 'Novembro', '12' => 'Dezembro');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>GRECOM - Grupo de Estudos da Complexidade</title>

	<meta name="language" content="Portuguese">
    <meta name="description" content="GRECOM - Grupo de Estudos da Complexidade">
    <meta name="keywords" content="grecom, grecom ufrn, grupo de estudos da complexidade, grupo de estudos ufrn">
    <meta name="reply-to" content="<?=$email_contato?>">
    <meta name="copyright" content="www.grecom.ufrn.br">
    <meta name="category" content="Grupo de Estudos da Complexidade">
    <meta name="Robots" content="Index,Follow">
    <meta name="author" content="Joeldson Costa e Andressa Kroeff - SINFO">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
    <link rev=made href="mailto:webmaster@info.ufrn.br">

	<!-- Estilo geral -->
	<link href="<?=$raiz?>css/estilo_geral.css" rel="stylesheet" type="text/css" />