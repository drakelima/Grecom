
	<!-- javascript -->
    <script src="<?=$raiz?>js/jquery.js" type="text/javascript"></script>
    <script src="<?=$raiz?>js/submenu.js" type="text/javascript"></script>
    <script src="<?=$raiz?>js/validacao.js" type="text/javascript"></script>

    <!-- Js lightBox -->
    <script src="<?=$raiz?>js/lightbox-0.5.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?=$raiz?>css/lightbox-0.5.css" media="screen" />

    <script type="text/javascript">
		$(document).ready(function() {

			//MENU E SUBMENUS
			new Submenu('#menu', {
				elementsSelector: '.li-menu',
				submenuSelector: '.sub-menu'
			});

			//DESTAQUES (atividades)
			$(".destaques"); // cria o link caso o javasript estaja activo.
			$("#show1").bind("click",function(){
				$(".destaques").slideToggle("show1");
				return false;
			});

			//EVENTOS (novidades)
			$(".eventos");
			$(".eventos").hide();
			$("#show2").bind("click",function(){
				$(".eventos").slideToggle("show2");
				return false;
			});

			//GALERIAS (fotos e videos)
			$(".galerias"); 
			$(".galerias").hide();
			$("#show3").bind("click",function(){
				$(".galerias").slideToggle("show3");
				return false;
			}); 

			//ENQUETE
			$(".enquete"); 
			$(".enquete").hide();
			$("#show4").bind("click",function(){
				$(".enquete").slideToggle("show4");
				return false;
			});

			// chama a funcao para ampliar imagem - lightBox
			$('.aumenta a').lightBox();

			//Função para subir pagina com efeito deslizante
			$('#topo-link').click(function(){
				$('html, body').animate({scrollTop:0}, 'slow');
				return false;
			});
		});

		//Função para mudar as imagens para Abrir e Fechar quadros
		function changeSrc(id) {
			var imagem = document.getElementById(id);

			//destaques
			if(imagem.alt == "Abrir"){
				imagem.src = "<?=$raiz?>img/off.png";
				imagem.alt = "Fechar";
				imagem.title="Fechar";
			}else{
				imagem.src = "<?=$raiz?>img/on.png";
				imagem.alt = "Abrir"
				imagem.title= "Abrir";
			} 
		}
    </script> 