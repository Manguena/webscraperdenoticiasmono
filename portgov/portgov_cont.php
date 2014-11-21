<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!--lista de scripts a serem carregados (JQuery)-->
		
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>

		<link rel="stylesheet" href="../livraria/style.css"/>
	</head>
	
	<body>
		
		<div id="home" data-role="page">
		
		<header data-role="header" role="banner" data-theme="b">
			
			<a href="/index.html" data-ajax ="false" class="ui-btn-left ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-home" data-prefetch="false">Home</a>
				<h1>
					&Uacute;LTIMA HORA
				</h1>
				
			<a href="/portgov/portgov_list.php" class="ui-btn-right ui-btn ui-btn-b ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-arrow-l" data-prefetch="true">Lista de not&iacute;cias</a>
				
				
		</header>



<article id="article" class="cont">

<?php
    /**
	 * Coidgo fonte utilizado para mostrar as noticias( propriamente ditas- o conteúdo)
	 * do site do 
	 * 
	 * */
  include_once('../livraria/noti_html.php');  // importacao da livraria html simple DOM
  
    //header('Content-Type:text/html; charset=ISO-8859-1');// para mudar o tipo de condificacao enviado pelo servidor http de modo
	// ki o cabaxalho enviado pelo arkivo HTML seja mesmo que HTTP do servidor
    
    $html=site($_GET["name"]);
	
	
	foreach ($html->find('div#region-content') as $article){
		
		$j=strip_tags($article->outertext, '<br> <p> <h1> <div>');// tirar toda a merda excluindo quebra de página
		
		// conversao de caracteres para UTF-8
		$escName = mb_convert_encoding($j, "HTML-ENTITIES", "UTF-8");
		
		echo str_ireplace(mb_convert_encoding("Acções do Documento", "HTML-ENTITIES", "UTF-8"),"",$escName); // impressao do texto na tela
		
	  // echo $escName;
		
	}
		
	
	
?>


<div class="border"></div> <!--esta parte tem o o objectivo de possibilitar a amostra de borders de pontuacao continua-->
<p>
	<strong>Fonte:</strong><a href="http://noticias.sapo.mz/" target="_blank"> Portal do Governo <img src="/imagem/ext.png"/></a>
	
	
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



<article>
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
			PAIS: Moçambique <br />
			CIDADE: Beira <br />
			INSTITUIÇÃO: desenvolvido na Universidade Zambeze- Faculdade de Ciências e Tecnologia <br />
			EMAIL: não disponível para o público <br />
			2014 <br />
		</footer>
		
		<div/>
	</body>
	
	
</html>