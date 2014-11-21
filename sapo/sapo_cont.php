<!doctype html>
<html>
	<head>
	     <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!--lista de scripts a serem carregados (JQuery)-->
		
<!--arkivo contendo o css customizado para a aplicacao-->		
<link rel="stylesheet" href="../livraria/style.css"/>
<!--fim do arkivo contendo o css customizado para a aplicacao--->		
		
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>


		
	</head>
	
	<body>
		
		<div id="home" data-role="page">
		
		<header data-role="header" role="banner" data-theme="b">
			
			<a href="/index.html" data-ajax ="false" class="ui-btn-left ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-home">Home</a>
				<h6 class="top">
					ÚLTIMA HORA
				</h6>
				
			<a href="/sapo/sapo_list.php" class="ui-btn-right ui-btn ui-btn-b ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-arrow-l">Lista de not&iacute;cias</a>
				
				
		</header>



<article id="article" class="cont">
<?php

// mostra a noticia depois de clique de um determinado LINK
include_once('../livraria/noti_html.php');


/***
 * O website do sapo notícias automaticamente muda o conteúdo e tenho que investigar alguma forma de 
 * resolver este problema porque não é bom
 * */

	// o acessado atraves do link enviado vai para esta variavel
	
	//header('Content-Type:text/html; charset=ISO-8859-1');// para mudar o tipo de condificacao enviado pelo servidor http de modo
	// ki o cabaxalho enviado pelo arkivo HTML seja mesmo que HTTP do servidor
	
	$html=site($_GET["name"]);
	
	// foreach($html->find('div#dNoticiaLusa') as $article){
					
	// JOrnal o PAI'S
				
	foreach($html->find('div#ja-current-content') as $article){
		
		
			
			//echo html_entity_decode("Ã¡s");
			$j=strip_tags ($article->outertext, '<br><p> <h1> <h2> <div>');// para tirar todo conteudo que nao é texto ou paragrafo
			 		
			// conversão de caracter de codificacao de latim para UTF-8usando a extensao Multibyte String Functions  
		//	echo $escName = mb_convert_encoding($j, "ISO-8859-1", "UTF-8");   //->10.10.2014
		
			echo mb_convert_encoding($j, "HTML-ENTITIES", "UTF-8");
			
			
			//echo $escName;
			
			
			
		//}
		
	}
	
	
	
	// impessao do conteudo das noticias
	

	
	// isso é para pegar noticia de umaa segunda fonte -> SAPO NOTICIAS
	
	
	foreach($html->find('#articleTitle') as $cab){
		
		echo mb_convert_encoding(strip_tags ($cab->outertext , '<br><div><h1>'), "HTML-ENTITIES", "UTF-8");
	  	
	}
	
	
	foreach($html->find('div#dNoticiaLusa') as $article){
		
		foreach($article->find('p') as $article1){
			
			
		
			$j=strip_tags ($article1->outertext, '<br><div><h1>');// para tirar todo conteudo que nao é texto ou paragrafo
			
			// conversão de caracter de codificacao de latim para UTF-8usando a extensao Multibyte String Functions  
			//$escName=mb_convert_encoding(htmlentities($j), "ISO-8859-1", "UTF-8");
			
			echo mb_convert_encoding($j, "HTML-ENTITIES", "UTF-8");
			
			
			
			
			
		}	
	}
	
	
	     
	

?>


<div class="border"></div> <!--esta parte tem o o objectivo de possibilitar a amostra de borders de pontuacao continua-->
<p>
	<strong>Fonte:</strong><a href="http://www.portaldogoverno.gov.mz/news" target="_blank"> Sapo Not&iacute;cias <img src="/imagem/ext.png"/></a>
	
	
</p>

<div class="border"></div> <!--esta parte tem o o objectivo de possibilitar a amostra de borders de pontuacao continua-->


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=819110678129521&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--comentario de facebook--> 
<div class="fb-comments" data-href="http://jordao.z99.us" data-numposts="5" data-colorscheme="light"></div>
<!-- comentario de facebook-->


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
			INSTITUIÇÃO: desenvolvido na Universidade Zambeze- Faculdade de Ciências e Tecnologia <br />
			EMAIL: nao disponível para o público <br />
			2014 <br />
		</footer>

<!--codigo para facebook-->
		
		<div/>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=819110678129521&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	</body>
	
	
</html>