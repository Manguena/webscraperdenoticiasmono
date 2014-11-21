<?php
// EXTRACAO DE INFORMACAO DO CABECALHO DE DESTAQUES

//include_once ('../livraria/simple_html_dom.php'); // teste local
include_once ('../livraria/noti_html.php');

// FUNÇÃO QUE PERMITE IMPRESSAO DOS CABEÇALHOS DA PARTE DE TÍTULO DOS DESTAQUES
 
 function cabecalhos2(){
 	$html=site('http://noticias.sapo.mz/');

  
$j=array();
 

foreach ($html->find('ul.snUltimas') as $elms){
 
	// adiquerir os listas ki contem noticias
	foreach( $elms->find('li') as $elmli  ){
			
		// 1-ADIQUERIR OS CABEXALHOS DAS NOTICIAS
		foreach ($elmli->find('h1') as $cabeca){
			
			// print  "htmlentities($cabeca->plaintext)"."<br/>";
			
		//	print  htmlentities($cabeca->plaintext)."<br/>"; // IMPRESSAO DOS TITULOS (mui util)
			//print $j=$cabeca->plaintext;
			// inicio de teste
			//$mod=str_replace("&amp;agrave;s", "&aacutes", htmlentities($cabeca->plaintext));
			//$j[]= htmlentities($cabeca->plaintext);
			//  $j[]=mb_convert_encoding( $cabeca->plaintext, "ISO-8859-1", "UTF-8"); -> versao actual do programa .. 10.10.2014
			
		//	str_replace("&amp;agrave;s", "&aacutes", htmlentities($cabeca->plaintext))
			
			//$j[]=htmlentities($cabeca->plaintext); // versao para testes
			$j[]=mb_convert_encoding( $cabeca->plaintext, "HTML-ENTITIES", "UTF-8");
			
		  // var_dump( $j[0]);
		  
			// fim de teste
			
			
			
			
			
					}
	}
	

}


$html->clear(); 
unset($html);

return $j;

 }
 
/**
 $a=cabecalhos2();
 
print  "".$a[0].""; // ->muito bom; bom demais

**/




/**
 *INICIO DA SAEGUNDA FUNCAO QUE BUSCA OS LINKS PARA A FUNCAO
 * 
 */


function link2(){
	
	//$html = file_get_html('http://www.noticias.sapo.mz/');
  
 // $html=sapo();
 $html=site('http://noticias.sapo.mz/');
     $j=array();
	
	
	foreach ($html->find('ul.snUltimas') as $elms){
		// adiquerir os listas ki contem noticias
	foreach( $elms->find('li') as $elmli  ){
		
		
		// 1-ADIQUERIR OS CABEXALHOS DAS NOTICIAS
		foreach ($elmli->find('h1') as $cabeca){
			
			
			foreach($cabeca->find('a')as $links){
				
				$j[]=$links->href;
				
			}
			
			
		}
		
	}
		
		
	}
	
	$html->clear(); 
unset($html);

return $j;
	
}
 
?>


