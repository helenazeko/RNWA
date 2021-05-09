<?php
$s = $_REQUEST["s"];
try{
	
	//$endPointWSDL = "https://localhost:44380/WebService1.asmx?WSDL";
  
	/* $sClient = new SoapClient($endPointWSDL,
							array(
							'cache_wsdl'=>WSDL_CACHE_NONE,
							'trace' => 1)
							); */
		//primjer pokretanja bez dodatnih opcija
		//$sClient = new SoapClient($endPointWSDL);
		$options = [
			'cache_wsdl'     => WSDL_CACHE_NONE,
			'trace'          => 1,
			'stream_context' => stream_context_create(
				[
					'ssl' => [
						'verify_peer'       => false,
						'verify_peer_name'  => false,
						'allow_self_signed' => true
					]
				]
			)
		];
		$wsdlUrl = 'https://localhost:44354/WebService1.asmx?WSDL';
		$client = new SoapClient($wsdlUrl, $options);
		$params = array("s" => $s);
		$result = $client->getEmployeerByName($params);
		// "Odgovor web servisa uz info o varijabli (var_dump)\n";
		//var_dump($result);
		$value = get_object_vars($result)['getEmployeerByNameResult'];
		$jsonObj = json_decode($value, true);
	
		$opt2 = json_decode(json_encode($value));

		echo $opt2;
		
	
		
		
		
		
} catch(SoapFault $e){
  var_dump($e);
  echo $e;
 } 
 ?>