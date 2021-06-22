<?php 

session_start();

/*OVDJE POCINJE DIO ZA DINAMICKI PRIKAZ*/

if (isset($_POST['username'])){
	if (($_POST['username'] == 'admin') && ($_POST['password'] == 'mojalozinka')){
	
	$_SESSION['logiran']='DA';
	$_SESSION['vrijeme']=time();
	$_SESSION['vrsta']='admin';
	}
	else {
	if(($_POST['username'] == 'korisnik') && ($_POST['password'] == 'mojalozinka')){
	
		$_SESSION['logiran']='DA';
		$_SESSION['vrijeme']=time();
		$_SESSION['vrsta']='korisnik';
		}
	else {
		echo "Netocno korisnicko ime i/ili lozinka<br>";
		}
	}
}

if (isset($_SESSION['logiran'])) {
//ako je korisnik logiran onda ga pustamo na ovaj dio stranice, inace ga odbijemo sa upozorenjem
require_once('connection.php');

if (isset($_GET['controller']) && isset($_GET['action'])) {
  $controller = $_GET['controller'];
  $action     = $_GET['action'];
} else {
  $controller = 'pages';
  $action     = 'home';
}

require_once('views/layout.php');
}

else {
echo "Niste logirani..<br>";
echo "<h2>Logirajte se kako bi pristupili stranici</h2>";
echo "<form name= action=\"index.php\" method=\"POST\">
			<table>
				<tr>	
					<td>Korisnicko ime</td>
					<td><input type=\"text\" name=\"username\" size=\"20\"></td>
				</tr>
				<tr>
					<td>Lozinka</td>
					<td><input type=\"password\" name=\"password\"  size=\"22\"></td>
				</tr>
				<tr>
					<td colspan=\"2\" align=\"right\">
								<input type=\"submit\" name=\"submit\" value=\"Logiraj se >>\"></td>
				</tr>
			</table>
		</form>";
} 
