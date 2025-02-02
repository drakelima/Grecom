
		<script src="http://www.google.com.br/jsapi" type="text/javascript"></script>
        <script type="text/javascript"> 
            google.load('search', '1', {language : 'pt-BR', style : google.loader.themes.GREENSKY});
            google.setOnLoadCallback(function() {
                var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
                    '003075121585300769612:eonjmvp_gd0', customSearchOptions);
                customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
                customSearchControl.draw('cse');
                customSearchControl.execute('<?=$chave?>');
            }, true);
        </script>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GRECOM</title>

<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/estilo_geral.css" />
<link rel="stylesheet" type="text/css" href="css/estilo_internas.css" />
 
 <!-- Estilo busca (google) -->
 <link rel="stylesheet" href="css/estilo_busca.css" type="text/css" />


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/submenu.js" type="text/javascript"></script>
<script src="js/validacao.js" type="text/javascript"></script>
    
<script type="text/javascript">


$(document).ready(function() {

	//DESTAQUES
	$(".destaques"); // cria o link caso o javasript estaja activo. coloca o link imediatamente antes do elemento #maisinfo, com a função $().before();
	//$(".destaques").hide(); // esconde a div que contém a informação, sem animação nenhuma
	// vamos agora alterar o funcionamento predefinido do link com a id show, para que, ao clicar, ele execute a função togle(), que altera o estado da div #maisinfo.
	$("#show1").bind("click",function(){
	$(".destaques").slideToggle("show1");
	return false;
	});

	//EVENTOS
	$(".eventos");
	$(".eventos").hide();
	$("#show2").bind("click",function(){
	$(".eventos").slideToggle("show2");
	return false;
	});

	//GALERIAS
	$(".galerias"); 
	$(".galerias").hide();
	$("#show3").bind("click",function(){
	$(".galerias").slideToggle("show3");
	return false;
	}); 

	//ENQUETES
	$(".enquete"); 
	$(".enquete").hide();
	$("#show4").bind("click",function(){
		$(".enquete").slideToggle("show4");
		return false;
	});


	//Função para os submenus
	new Submenu('#menu', {
		elementsSelector: '.li-menu',
		submenuSelector: '.sub-menu'
	});

//Função para subir pagina com efeito deslizante
       $('#topo-link').click(function(){
          $('html, body').animate({scrollTop:0}, 'slow');
      return false;
         });
     });
	 
	 //Função para mudar as imagens para Abrir e Fechar quadros
function changeSrc(id) {
	var imagem=document.getElementById(id);
	
	//destaques
	if(imagem.alt == "Abrir"){
		imagem.src = "../img/off.png";
		imagem.alt = "Fechar";
		imagem.title="Fechar";
	}else{
		imagem.src = "../img/on.png";
		imagem.alt = "Abrir"
		imagem.title= "Abrir";
	} 
}
</script> 


</head>

<body>
	<div id="pagina" class="">
        <div id="topo">
        	<div id="cabecalho">
        		<div id="cabecalho-centro">
                    <!-- LOGO GRECOM -->
                    
                    <a class="url" title="Grupo de Estudos da Complexidade - GRECOM" href="html/index.html">
                    	<div id="logo"></div>
                    </a>
                    
                    <div id="topo-lateral-direita">
						<!-- MENU RÁPIDO -->
						<div id="menu-rapido" class="menu">
							<ul>
								<li class="li-menu">
									<a href="html/index.html" title="Inicio">Home</a>
								</li>
								<li class="li-menu divisor">|</li>
								<li class="li-menu">
									<a href="html/casulo.html" title="Nossa História">Do casulo à borboleta</a>
								</li>
								<li class="li-menu divisor">|</li>
								<li class="li-menu">
									<a href="html/contato.html" title="Fale conosco">Contato</a>
								</li>
							</ul>
						</div>
						<!-- LOGO UFRN -->
						<div id="logo_UFRN">					  	
							<a title="Universidade Federal do Rio Grande do Norte - UFRN" target="_blank" href="http://www.ufrn.br/">
								<img align="absmiddle" src="img/UFRN.png" alt="Site da UFRN" title"UFRN"/>
							</a>
						</div>
						<!-- BUSCA -->
						<div id="busca">
							<form id="form_busca" method="post" action="#">
								<span class="bg_busca">
									<input id="chave" class="buscar" type="text" onBlur="preencheCampo(this, 'Palavra-chave')" onClick="limpaCampo(this, 'Palavra-chave')" value="Palavra-chave" name="chave">
								</span>
								<input class="bt_buscar" type="button" onClick="verifBusca()" value="" alt="Buscar" title="Efetuar buscar">
							</form>
						</div>
					</div> <!-- fim lateral_top -->  
                 
            	</div><!-- Container_Header -->
        	</div>
            
			<!-- NAVEGAÇÃO -->    
        	<div id="nav">
				<div id="menu">
					<ul class="menu area-acoes">
						<li class="li-menu">
							<a href="eventos.html" title="Novidades">NOVIDADES</a>
						</li>    
						<li class="li-menu area-eventos">
							<a href="#" title="Eventos">EVENTOS / ATIVIDADES</a>
							<div class="sub-menu">
								<div class="sub-top"></div>
									<ul class="marcador-azul">
										<li><a href="html/pagina_azul.html" title="Grecom 20 Anos">Grecom 20 Anos</a></li>
										<li><a href="html/pagina_azul.html" title="Dia de Estudo">Dia de Estudo</a></li>
										<li><a href="html/pagina_azul.html" title="Oficina do pensamento">Oficina do Pensamento</a></li>
										<li><a href="html/atividades.html" title="Mais Atividades">Mais Atividades</a></li>
									</ul> 
							</div>
						</li>  
						<li class="li-menu area-publicações">
							<a href="#" title="Ações">PUBLICAÇÕES</a>
							<div class="sub-menu">
								<div class="sub-top"></div>
									<ul class="marcador-amarelo">
										<li><a  href="html/publicacoes.html" title="Livros">Livros</a></li>
										<li><a  href="html/publicacoes.html" title="Revistas">Revistas</a></li>
										<li><a  href="html/publicacoes.html" title="Artigos">Artigos</a></li>
										<li><a  href="html/publicacoes.html" title="Monografias">Monografias</a></li>
										<li><a  href="html/publicacoes.html" title="Dissertações">Dissertações</a></li>
										<li><a  href="html/publicacoes.html" title="Teses">Teses</a></li>
										<li><a  href="html/todos.html" title="Todas">Todas</a></li>
									</ul> 
							</div>
						</li>   
						<li class="li-menu area-projetos">
							<a title="Ações">PROJETOS</a>	
							<div class="sub-menu">
								<div class="sub-top"></div>
									<ul class="marcador-amarelo">
										<li><a href="html/pagina_amarela.html" title="Polifônicas Idéias">Polifônicas Idéias</a></li>
										<li><a href="html/pagina_amarela.html" title="Estaleiro de Saberes">Estaleiro de Saberes</a></li>
										<li><a href="html/pagina_amarela.html" title="CIUEM - Cátedra Itinerante UNESCO Edgar Moran para o Pensamento Complexo">CIUEM</a></li>
										<li><a href="html/pagina_amarela.html" title="Para um Pensamento do Sul">Para um Pensamento do Sul</a></li>
									</ul> 
							</div>
						</li>  
						<li class="li-menu area-galerias">
							<a title="Galerias">GALERIAS</a>
							<div class="sub-menu">
								<div class="sub-top">
								</div>
									<ul class="marcador-laranja">
										<li><a href="html/fotos.html" title="Fotos">Fotos</a></li>
										<li><a href="html/videos.html" title="Vídeos">Vídeos</a></li>
									</ul> 
							</div>
						</li>
						<li class="li-menu area-equipe">
							<a title="Equipe Grecom" class="">EQUIPE GRECOM</a>
							<div class="sub-menu">
								<div class="sub-top">
								</div>
									<ul class="marcador-vermelho">
										<li><a href="html/edgar.html" title="Edgar Moran">Edgar Moran</a></li>
										<li><a href="html/pesquisadores.html"  title="Pesquisadores">Pesquisadores</a></li>
									</ul> 
							</div>
						</li>
						<li class="li-menu area-amigos">
							<a href="html/amigos.html" title="Amigos" class="">AMIGOS</a>
						</li>
						<li class="li-menu area-nucleos">
							<a href="html/parcerias.html" title="Parcerias" class="">PARCERIAS</a>
						</li>
					</ul>
				</div>
                    
                <!-- BARRA DE SESSÃO -->
                <div id="barra-sessao">
                	<div class="verde barra-sessao-interna"></div>
                </div>
            
            </div><!-- fim naveçação --> 
                      
		</div><!-- FIM TOPO -->
            
<!-- ======================================================================================================================
     CORPO
     ====================================================================================================================== -->  
        <div id="corpo">
			<div id="centro-corpo">
            	<div id="migalha"><a href="index.php">Home</a> &raquo; Busca Grecom</div>
            
            	<div id="conteudo">
                   	                   
                    <h2 class="titulo" ><?=$area?>Busca Geral do GRECOM</h2>

                    <div id="cse" class="cse">Carregando a busca</div>
                    
                    
               </div>
            	    
				
            </div> <!-- fim centro-corpo-->      
        </div><!-- fim corpo-->
		
        
<!-- ======================================================================================================================
     TOPO LINK
     ====================================================================================================================== --> 
        <div id="topo-link">
			<a href="#topo" title="voltar ao topo" class="topo-link">
            	TOP
            	<img src="img/off.png">
            </a>
			
        </div>
        
<!-- ======================================================================================================================
    RODAPE
     ====================================================================================================================== --> 
        <div id="rodape">	
           
           <!-- BARRA 1 -->
            <div id="rodape-barra1">
            
                <div id="rodape-centro-barra1">
                	<div  id="grecom">
                      <p>
                            <a title="Grupo de Estudos da Complexidade" href="#top">Grupo de Estudos da Complexidade/GRECOM</a><br/>
                            Centro de Ciências Sociais Aplicadas<br/>
                            Programa de Pós-Graduação em Educação<br/>
                            Contato: +55 (84) 3215-3525/ TeleFax: +55 (84) 3211-9218<br/>
                            Email: calmeida17@hotmail.com<br/>
                            Coordenadora do Grecom: Maria da Conceição de Almeida<br/>
                        </p>
                    </div>
                    
                    <div id="redes_sociais">
                      <ul class="menu">
							<li class="li-menu-redes-sociais">
						  		<a title="Facebook" target="_blank" href="www.facebook.com">
									<img align="absmiddle" src="img/bg_facebook.png" alt="facebook">
								</a>
							</li>
							<li class="li-menu-redes-sociais">
								<a title="twitter" target="_blank" href="http://twitter.com">
									<img align="absmiddle" src="img/bg_twitter.png" alt="twitter">
								</a>
							</li>
							<li class="li-menu-redes-sociais">
  								<a title="rss" target="_blank" href="http://www.info.ufrn.br">
									<img align="absmiddle" src="img/bg_rss.png" alt="RSS">
                                 </a>
							</li>
                      	</ul>
                	</div><!-- fim menu redes_sociais-->
              
                  	<div id="vinte_anos">
                    	<a href="html/vinte_anos.html"><img align="absmiddle" src="img/bg_20_anos.png" alt="GRECOM 20 anos"></a>
                	</div>
                                          
        		</div><!-- fim centro-rodape-barra1-->
            </div> <!-- fim rodape-barra1-->
            
		
            <!-- BARRA 2 -->
        	<div id="rodape-barra2">
        		<div id="rodape-centro-barra2">                    
                    <!-- menu rápido-->
                    <div id="rodape-menu-rapido">
						<ul class="menu">
							<li class="li-menu">
								<a href="html/index.html" title="Inicio">Home</a>
							</li>
                            <li class="li-menu divisor">|</li>
							<li class="li-menu">
								<a href="html/casulo.html" title="Nossa História">Do casulo à borboleta</a>
							</li>
                            <li class="li-menu divisor">|</li>
							<li class="li-menu">
								<a href="html/contato.html" title="Fale conosco">Contato</a>
							</li>
						</ul>

                	</div>    
                    
                    <div id="creditos">
						<span class="direitos">
							&copy; Copyright 2012 <b>GRECOM</b> - <a href="http://www.ufrn.br" target="_blank" title="UFRN - Universidade Federal do Rio Grande do Norte">UFRN - Universidade Federal do Rio Grande do Norte</a>
						</span>
						
						<span class="desenvolvido">
							<label>Desenvolvido por:</label>
							<a title="Superintendência de Informática" target="_blank" href="http://www.info.ufrn.br">
								<img align="absmiddle" src="img/sinfo.png">
							</a>
						</span>
                    </div><!-- fim div creditos-->
                </div><!-- fim div content_line2-->
        	</div><!-- fim div footer_line2-->
        </div> <!-- fim div footer--> 
    </div><!-- fim div container-->
</body>
</html>