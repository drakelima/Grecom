
</head>
<body>
	<div id="pagina" class="<?=$classe_cor?>">
        <div id="topo">
        	<div id="cabecalho">

                <!-- inicio do topo -->
        		<div id="cabecalho-centro">
                    <!-- LOGO GRECOM -->
                    <a class="url" title="Grupo de Estudos da Complexidade - GRECOM" href="<?=$raiz?>index.php">
                    	<div id="logo"></div>
                    </a>

                    <!-- lateral do topo -->
                    <div id="topo-lateral-direita">
						<!-- menu rapido -->
						<div id="menu-rapido" class="menu">
							<ul>
								<? include "menu_rapido.php"; ?>
							</ul>
						</div>
						<!-- FIM - menu rapido -->

						<!-- logo da ufrn -->
						<div id="logo_UFRN">
							<a title="Universidade Federal do Rio Grande do Norte - UFRN" target="_blank" href="http://www.ufrn.br/">
								<img align="absmiddle" src="<?=$raiz?>img/UFRN.png" alt="Site da UFRN" title"UFRN"/>
							</a>
						</div>
						<!-- FIM - logo da ufrn -->

						<!-- busca -->
	                        <? include "busca_formulario.php"; ?>
						<!-- FIM - busca -->

					</div>
                    <!-- FIM - lateral do topo -->

                </div>
                <!-- FIM - inicio do topo -->

        	</div>

			<!-- NAVEGACAO -->
        	<div id="nav">
            	<? include "menu.php"; ?>

                <!-- BARRA DE SESSAO -->
                <div id="barra-sessao">
                	<div class="barra-sessao-interna"></div>
                </div>

            </div>
            <!-- FIM - navegacao -->

		</div>
        <!-- FIM - topo -->