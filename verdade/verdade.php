<?php
  include_once('../livraria/noti_html.php');
  
  // envio dos links
  function verdade_links(){
  	$html=site('http://www.verdade.co.mz/newsflash/');
	
	foreach($html->find('a.readon') as $links ){
		$j[]= "http://www.verdade.co.mz/".$links->href;
		
	}
	
	return $j;
  } 
  
 // envio dos cabecalhos juntos dos links
  function verdade_cabe(){
  	
	$html=site('http://www.verdade.co.mz/newsflash/');
  foreach($html->find('td.contentheading') as $elms){
    
	
	$j[]=mb_convert_encoding( $elms->plaintext, "HTML-ENTITIES", "UTF-8");
			  	
	
 }
  
  return $j;
  
  }
  
  
  
  
  
   
?>