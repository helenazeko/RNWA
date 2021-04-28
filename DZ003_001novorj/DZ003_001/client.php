<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<?php



try{
	error_reporting(0);
	ini_set('soap.wsdl_cache_enabled',0);
	ini_set('soap.wsdl_cache_ttl',0);

	$endPointWSDL = "http://localhost/DZ003_001/convert.wsdl";
	
	$sClient = new SoapClient($endPointWSDL,
							array(
							'cache_wsdl'=>WSDL_CACHE_NONE,
							'trace' => 1)
							);
	//primjer pokretanja bez dodatnih opcija
		//$sClient = new SoapClient('convert.wsdl');
	
	$valuta = $_POST['valuta'];
	$kolicina = $_POST['kolicina'];

	$response = $sClient->convert($valuta, $kolicina);
	//print_r($response);
		//var_dump($response);
	echo "\n\n";
		

} catch(SoapFault $e){
  var_dump($e);
  echo $e;
}

?>
<b>Pretvori EUR u BAM ili pretvori BAM u EUR</b>
<form name="form" method="post" action="./client.php">
<p>Unesi vrijednost <br> 
<input type="text" name="kolicina" value=""> 
<div id="valuta" >
		  <input type="radio" name="valuta" value="ToEur" checked>
			<label>BAM u EUR</label><br />
		  <input type="radio" name="valuta" value="ToBam">
			<label>EUR u BAM</label>
		</div>	
<p><input id="btnPretvori" type="submit" name="submit" value="Pretvori"></p>
<input type="text" id="rez" name="id" placeholder="Rezultat" value=" <?php echo  number_format($response, 2, '.', '');	?>" >
</form>
