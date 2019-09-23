
			</div>
        </div>
        <!-- FIM - corpo do site -->

        <!-- link para o topo -->
        <div id="topo-link">
			<a href="#topo" title="voltar ao topo" class="topo-link">
            	TOPO<img src="<?=$raiz?>img/off.png">
            </a>
        </div>
        <!-- FIM - link para o topo -->

        <!-- rodape do site -->
        <div id="rodape">

            <!-- barra 1 -->
            <div id="rodape-barra1">
                <div id="rodape-centro-barra1">
                	<div id="grecom">
                        <p>
                            <a class="maior" title="Grupo de Estudos da Complexidade" href="<?=$raiz?>index.php">Grupo de Estudos da Complexidade/GRECOM</a><br/>
                            Centro de Ciências Sociais Aplicadas<br/>
                            Programa de Pós-Graduação em Educação<br/>
                            Contato: +55 (84) 3215-3525<br/>
                            E-mail: <a href="mailto:<?=$email_contato?>"><?=$email_contato?></a><br/>
                            Coordenadora do Grecom: Maria da Conceição de Almeida<br/>
                        </p>
                    </div>

                    <!-- redes sociais -->
                    	<? include "redes_sociais.php"; ?>
                    <!-- FIM - redes sociais -->

                  	<div id="vinte_anos">
                    	<a href=""><img align="absmiddle" src="<?=$raiz?>img/bg_21_anos.png" alt="GRECOM 21 anos"></a>
                	</div>
        		</div>
            </div>
            <!-- FIM - barra 1 -->

            <!-- barra 2 -->
        	<div id="rodape-barra2">
        		<div id="rodape-centro-barra2">

                    <!-- menu rapido (rodape) -->
                    <div id="rodape-menu-rapido">
						<ul class="menu">
							<? include "menu_rapido.php"; ?>
						</ul>
                	</div>
                    <!-- FIM - menu rapido (rodape) -->

                    <!-- creditos -->
                    <div id="creditos">
						<span class="direitos">
							&copy; Copyright 2012 <b>GRECOM</b> - <a href="http://www.ufrn.br" target="_blank" title="UFRN - Universidade Federal do Rio Grande do Norte">UFRN - Universidade Federal do Rio Grande do Norte</a>
						</span>
						<span class="desenvolvido">
							<label>Desenvolvido por:</label>
							<a title="Superintendência de Informática" target="_blank" href="http://www.info.ufrn.br">
								<img align="absmiddle" src="<?=$raiz?>img/sinfo.png">
							</a>
						</span>
                    </div>
                    <!-- FIM - creditos -->

                </div>
        	</div>
            <!-- FIM - barra 2 -->

        </div>
    </div>

    <!-- javascript -->
	<? include "javascript.php"; ?>
</body>
</html>