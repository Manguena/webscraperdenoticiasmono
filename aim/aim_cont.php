<!DOCTYPE html>
<html>
	<head>
		
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="iso-8859-1">
		
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
			
			<a href="/index.html" data-ajax ="false" class="ui-btn-left ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-home" data-prefetch="false">Home</a>
				<h1>
					&Uacute;LTIMA HORA
				</h1>
				
			<a href="/aim/aim_list.php" class="ui-btn-right ui-btn ui-btn-b ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-arrow-l" data-prefetch="true">Lista de not&iacute;cias</a>
				
				
		</header>



<article id="article" class="cont">


<?php

/**
 * 
 * Este arquivo possui o conteudo da informação a ser trazida do website de notícia 
 * AIM (Agência de Informação de Mocambique)
 * */
  
  include_once('../livraria/noti_html.php');  // importacao da livraria html simple DOM
  
   // header('Content-Type:text/html; charset=ISO-8859-1');
    
 $html=site($_GET["name"]);
 
 foreach($html->find('div#articleTitle') as $titulo){
 	
	
	
	echo mb_convert_encoding( strip_tags($titulo->outertext, '<br> <p> <h1> <div>')  , "HTML-ENTITIES", "UTF-8"); // impressao da parte do texto  no
	//echo $titulo->outertext;
 }
 

foreach ($html->find('div#articleBody') as $article ){
	
	$j=strip_tags($article->outertext, '<br> <p> <div>');// tirar todo o conteudo excluindo as quebras de páginas
	
	// convercao doas caracteres para UTF-8
	
	//$escName = mb_convert_encoding($j, "ISO-8859-1", "UTF-8"); -> invalido 10.10.2014
	
	echo mb_convert_encoding($j, "HTML-ENTITIES", "UTF-8");
	
	
	
}

     
?>
<div class="border"></div> <!--esta parte tem o o objectivo de possibilitar a amostra de borders de pontuacao continua-->

<p>
	<strong>Fonte:</strong><a href="http://noticias.sapo.mz/aim/" target="_blank"> AIM <img src="/imagem/ext.png"/></a>
	
	
</p>

<div class="border"></div> <!--esta parte tem o o objectivo de possibilitar a amostra de borders de pontuacao continua-->
</article>

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
			EMAIL: não disponível para o público <br />
			2014 <br />
		</footer>
		
		
		<div/>
		



	</body>
	
	
</html>