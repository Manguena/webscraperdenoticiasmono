<?php
	include_once ('../aim/aim.php');
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!--lista de scripts a serem carregados (JQuery)-->
		
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>

  <link rel="stylesheet" href="../livraria/style.css" />
		
	</head>
	
	<body>
		
		<div id="home" data-role="page">
		
		<header data-role="header" role="banner" data-theme="b">
			
			<a href="/index.html" data-ajax ="false" class="ui-btn-left ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-home" data-prefetch="true">Home</a>
				<h1>
					&Uacute;LTIMA HORA
				</h1>
				
		</header>
		
		
		<article role="main" class="ui-content">
			<ul data-role="listview" data-inset="false" >


			<?php
			//header('Content-Type:text/html; charset=ISO-8859-1');
			
			
			print "<br/ >";
			$cabecalho_aim=cabeca_aim();
			$link_aim=links_aim();
			
			
          do{
          	
			// imprimir os links para acesso as noticias
			echo "<li><a class=\"cont2\" style=\"white-space: normal; text-align: justify\"   href="."/aim/aim_cont.php?name=".current($link_aim)," data-prefetch=\"true\">",current($cabecalho_aim),"</a>","<li>";
				
				//echo current($cabecalho2), ".", current($link2), "<br/>";
          	
          } while( next($cabecalho_aim)&& next($link_aim));
			
			
			
			?>
	
	
	</ul>
		</article>
		
			<footer data-role="collapsible" class="cont3" data-collapsed-icon="carat-d" data-theme="b" >
			<h4>Acerca</h4>
			<p>
			Ultima hora é um web scraper de notícia para dispositivos móveis e tem como objectivo 
			facilitar o acesso de notícias para usuários de dispositivos móveis através da integração 
			de várias fontes digitais de notícias numa só fonte. 
			</p>
			
			<p>
			Este projecto foi criado para uma monografia de licenciatura em Engenharia Informática e espera-se 
			que possa evoluir e possuir várias funcionalidades para o usuário.
			</ p>
			
			<p>
			Nao se pretende de forma alguma substituir o meio convencional de acesso a notícias 
			quer seja electrônico ou não, mas oferecer uma alternativa de elevada qualidade e 
			que se baseia na oferta de notícias recentes.
			</p>
			
			<p>
				Espera-se que esta aplicação possa trazer alguma mudanca positiva na vida das pessoas e possa
				ser muito útil.
			</ p>
			
			
		</footer>
		
		
		
		<footer data-role="collapsible"  class="cont3" data-collapsed-icon="carat-d" data-theme="b">
			<h4>Contacto</h4>
			
			NOME DO DESENVOLVEDOR: Jordão Manguena <br/>
			PAÍS: Moçambique <br />
			CIDADE: Beira <br />
			INSTITUIÇÃO: desenvolvido na Universidade Zambeze- Faculdade de Ciencias e Tecnologia <br />
			EMAIL: nao disponível para o público <br />
			2014 <br />
		</footer>
		
		
		<div/>
	</body>
	
	
</html>