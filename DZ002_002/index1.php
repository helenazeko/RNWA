<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
<?php

$s = $_REQUEST["s"];
$hint = "";

$s = strtolower($s);
$len=strlen($s);
    /*
	foreach($s as $name) {
        if (stristr($s, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    
	}
	*/
	
	

/**********************************************************/
$db = mysqli_connect("localhost","root","");

if($db) {

$result = mysqli_select_db($db, "employees") or die("Došlo je do problema prilikom odabira baze...");
if ($s == "") {
	$sql="SELECT * FROM employees LIMIT 1000";
}
else{
$sql="SELECT * FROM employees where first_name LIKE '$s%'";
}
//echo $sql;
$result2 = mysqli_query($db, $sql) or die("Došlo je do problema prilikom izvrsavanja upita...");
$n=mysqli_num_rows($result2);

if ($n > 0){
	
		echo "<table class=table>
			<thead>
			 <th>ID</th>
			 <th>Ime</th>
			 <th>Prezime</th>
			 <th>Spol</th>
			 <th>Datum zaposlenja</th>
			</thead>";
	while ($myrow=mysqli_fetch_row($result2)){
		 
		echo " <tbody>
			  <tr>
			    <td data-label='ID'>$myrow[0]</td>
			    <td data-label='Ime'>$myrow[2]</td>
			    <td data-label='Prezime'>$myrow[3]</td>
			    <td data-label='Spol'>$myrow[4]</td>
		            <td data-label='Datum zaposlenja'>$myrow[5]</td>
			 </tr>
		       </tbody>";
			
			//echo "<div name=\"result2\" id=\"".$myrow[0]."\">" .$myrow[2].", ".$myrow[3]."</div>";
			

		}
		 echo "</table>";
	}
else {
echo "<span>Nema rezultata za prikaz<br></span>";
}	
}
else {
echo "<br>Nije proslo spajanje<br>";
}
/**********************************************************/
	


// Output "no suggestion" if no hint was found or output correct values 
//echo $hint === "" ? "no suggestion" : $hint;

?>

