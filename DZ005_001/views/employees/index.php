<style>
    table{
  border: 1px solid rgb(46, 45, 45);
  padding-left: 40px;
  width: 800px;
  border-collapse: collapse;
  background-color: rgb(241, 233, 233);
  color:rgb(80, 74, 72)
}
tr {
  padding-left: 5px;
  border: 1px solid rgb(112, 218, 90);
}
th{
    padding-right: 50px;
  
}
.btn1{
  background-color: pink;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
<div class="container">
	<br>
    <center><h1>Employees</h1></center>
	<br>

  <a class="btn1" href="?controller=employees&action=verifyinsert" role="button">Dodaj</a>


  <div class="table-responsive"> 
    <table class="table">
        <tr>
            <th>Emp Number</th>
            <th>Datum rođenja</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Spol</th>
            <th>Datum zaposlenja</th>
            <th>Uredi</th>
            <th>Izbrisi</th>
            
        </tr>
        <?php foreach ($employees as $row): ?>
        <tr>
            <td><?php echo $row->emp_no ?></td>
            <td><?php echo $row->birth_date ?></td>
            <td><?php echo $row->first_name ?></td>
            <td><?php echo $row->last_name ?></td>
            <td><?php echo $row->gender ?></td>
            <td><?php echo $row->hire_date ?></td>
            <td><a href="?controller=employees&action=verifyupdate&id=<?php echo $row->emp_no?>" class="btn btn-primary btn-xs"> Uredi</a></td>
            <td><a href="?controller=employees&action=verifydelete&id=<?php echo $row->emp_no?>" class="btn btn-danger btn-xs"> Izbrisi</a></td>

        </tr>
        <?php endforeach ?>
    </table>
	</div>
  </div>
 
    
