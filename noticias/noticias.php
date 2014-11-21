<?php
    
    include_once('../livraria/noti_html.php');// faser uso da livraria HTML SIMPLE DOM
    
    
    // envio dos cabecalhos das noticias
    
   function noticias_cabe(){
    
    $html=site('http://www.jornalnoticias.co.mz/');
	
	foreach($html->find('.items-row')as $elms){
		
		foreach($elms->find ('.jn-postheader') as $elms2){
		
	   $j[]=mb_convert_encoding( $elms2->plaintext, "HTML-ENTITIES", "UTF-8");
	
	
		
		}
	}
	
	return $j;
	
	}
	


// links das noticias serao enviadas da seguinte forma
// com o uso da funcao que se encontra abaico


  function noticias_links(){
  	
 $html=site('http://www.jornalnoticias.co.mz/');
	
	foreach($html->find('.items-row')as $elms){
		
		
		foreach($elms->find ('.jn-postheader a') as $elms2){
		
	  $j[]=mb_convert_encoding( "http://www.jornalnoticias.co.mz".$elms2->href, "HTML-ENTITIES", "UTF-8");
	
	
		
		}
		
	}
	
	return $j;
  }



?>