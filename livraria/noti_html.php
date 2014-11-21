<?php

/*
 * ESTE ARQUIVO IRA'CONTER INFORMACAO SOBRE ACESSO A VARIAVEL QUE IRÁ TER ACESSO A WEB
 * */
 include_once('simple_html_dom.php');
 
 function site($url){
 	$ch = curl_init();
  $timeout = 10;
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
  curl_setopt($ch, CURLOPT_FAILONERROR, 1);// parar se encontrar erro
  $data = curl_exec($ch);
  

$html= str_get_html($data); 

 curl_close($ch); 

return $html;
	
	
 }
 
 
 

?>