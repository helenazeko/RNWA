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
// get the q parameter from URL
$s = $_REQUEST["s"];
$hint = "";

// lookup all hints from array if $q is different from "" 
if ($s !== "") {
    $s = strtolower($s);
    $len=strlen($s);
    /*
	foreach($a as $name) {
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

$result = mysqli_select_db($db, "employees") or die("Doslo je do problema prilikom odabira baze...");
$sql="SELECT * FROM employees where first_name LIKE '$s%' ";
//echo $sql;
$result2 = mysqli_query($db, $sql) or die("Doslo je do problema prilikom izvrsavanja upita...");
$n=mysqli_num_rows($result2);



if ($n > 0){
  echo "<table>
<tr>
<th>Ime</th>
<th>Prezime</th>
<th>Datum rođenja</th>
<th>Spol</th>
<th>Datum zaposlenja</th>
</tr>";

	while ($myrow=mysqli_fetch_row($result2)){
    echo "<tr>";
    echo "<td>" . $myrow[2] . "</td>";
    echo "<td>" . $myrow[3] . "</td>";
    echo "<td>" . $myrow[1] . "</td>";
    echo "<td>" . $myrow[4] . "</td>";
    echo "<td>" . $myrow[5] . "</td>";
    echo "</tr>";
   // echo $myrow[0].",".$myrow[1].",".$myrow[2];
			//$hint .= "<div name=\"result\" id=\"".$myrow[1]."\">".$myrow[2]." ".$myrow[3].",</div>";

		}
    echo "</table>";
	}
else {
//echo "No patern rows returned<br>";
}	
}
else {
echo "<br>Nije proslo spajanje<br>";
}
/**********************************************************/
	
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;

?>