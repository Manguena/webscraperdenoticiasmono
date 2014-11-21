<?php
    include_once('../livraria/noti_html.php');
	
// funcao que busca os links do portal do governo de mocambique

	
	function cabeca_portgov(){
		
	$html=site('http://www.portaldogoverno.gov.mz/news');
	//$html=portgov();
		
		$j=array();// array a ser utilizado para armazenas os diferentes títulos de notícias
		
		foreach($html->find('h2.tileHeadline') as $elms){
		
		foreach ($elms->find ('a') as $cab){
			
			//print $cab->plaintext."<br/>";
			$j[]=mb_convert_encoding( $cab->plaintext, "HTML-ENTITIES", "UTF-8");
			
			
		}
		
		}
		
		$html->clear();
		unset ($html);
		
		return $j;
		//print count($j);
		
	}
		
		
 // Esta funcao ira permitir a extraccao de links 
 
 function links_portgov(){
 	$html=site('http://www.portaldogoverno.gov.mz/news');
 //$html=portgov();
		
		$j=array();// array a ser utilizado para armazenas os diferentes títulos de notícias
		
		foreach($html->find('h2.tileHeadline') as $elms){
		
		foreach ($elms->find ('a') as $cab){
			
			//print $cab->href."<br/>";
			
			//print $cab->plaintext."<br/>";
			$j[]=mb_convert_encoding( $cab->href, "HTML-ENTITIES", "UTF-8");
			
			
			
		}
		
		}
		
		$html->clear();
		unset ($html);
		
		return $j;
 }

		
?>