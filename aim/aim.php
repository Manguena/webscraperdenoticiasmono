<?php

include_once('../livraria/noti_html.php'); // longe

// funcao que busca os links da página da agencia nacional de noticias
 
 function links_aim(){
 $html=site('http://noticias.sapo.mz/aim/');

 
 $j=array();// variavel que sera'utilizada para armazenar os diferentes títulos de noticias
 
 foreach ($html->find('ul#news')as $elms){
 	
	foreach($elms->find('li span#title') as $elmli){
		
		foreach($elmli->find('a') as $links){
			 $j[]="http://noticias.sapo.mz".$links->href;
		}
		
	}
 	
 }
 
 $html->clear(); 
unset($html);
 return $j;
 }
 
 /**
 $j=links();
 
 echo $j[0];
 
 **/
 
 // funcao que adiquire os cabeçalhos das notícias da página da agencia nacioal de noticias
 
 function cabeca_aim(){
 $html=site('http://noticias.sapo.mz/aim/');

 
 $j=array();// variavel que sera'utilizada para armazenar os diferentes títulos de noticias
 
 foreach ($html->find('ul#news')as $elms){
 	
	foreach($elms->find('li span#title') as $elmli){
		
		foreach($elmli->find('a') as $cab){
			// $j[]=mb_convert_encoding( $cab->plaintext, "ISO-8859-1", "UTF-8"); -> invalidaddo no dia 10.10.2014
			$j[]=mb_convert_encoding( $cab->plaintext, "HTML-ENTITIES", "UTF-8");
			
			
		}
		
	}
 	
 }
 
 $html->clear(); 
unset($html);
 return $j;
 }
 
 /**
 $j=cabeca();
 
 echo $j[0];
 
***/

?>