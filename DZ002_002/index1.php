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

$connect = mysqli_connect("localhost", "root", "", "employees");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM employees 
	WHERE first_name LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM employees LIMIT 1000";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div>
					<table>
						<tr>
							<th>Ime </th>
							<th>Prezime</th>
              <th>Datum rođenja</th>
							<th>Spol</th>
							<th>Datum zaposlenja</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row[2].'</td>
				<td>'.$row[3].'</td>
				<td>'.$row[1].'</td>
				<td>'.$row[4].'</td>
        <td>'.$row[5].'</td>
				
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}


?>