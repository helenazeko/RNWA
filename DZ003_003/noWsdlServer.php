<?php 
$s = $_REQUEST["emp_no"];
$db = mysqli_connect("localhost", "root", "", "employees");
if($db){

	$sql = "select salary, from_date, to_date from salaries where emp_no = $s";
	$response = mysqli_query($db, $sql) or die("database error:". mysqli_error($db));	
	
	$n=mysqli_num_rows($response);
	if ($n > 0){
	
		echo "<table class=table>
			<thead>
			 <th>Salary</th>
			 <th>From_date</th>
			 <th>To_date</th>
			
			</thead>";
	while ($myrow=mysqli_fetch_row($response)){
		 
		echo " <tbody>
			  <tr>
			    <td data-label='Salary'>$myrow[0]</td>
			    <td data-label='From_date'>$myrow[1]</td>
			    <td data-label='To_date'>$myrow[2]</td>
		    
			 </tr>
		       </tbody>";
			
			//echo "<div name=\"result2\" id=\"".$myrow[0]."\">" .$myrow[2].", ".$myrow[3]."</div>";
			

		}
		 echo "</table>";
	}
}
else {
	echo "<br>Nije proslo spajanje<br>";
	}

?>	
