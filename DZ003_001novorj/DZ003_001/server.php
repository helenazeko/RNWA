<?php

if(!extension_loaded("soap")){
  dl("php_soap.dll");
}


ini_set("soap.wsdl_cache_enabled","0");

$server = new SoapServer("convert.wsdl");


function convert($valuta, $kolicina){
	
	if ($valuta == 'ToEur'){
		$rezultat = $kolicina*0.51;
	}
	else if ($valuta == 'ToBam'){
		$rezultat = $kolicina*1.96;
	}
	
	return $rezultat;
}

$server->AddFunction("convert");
$server->handle();
?>