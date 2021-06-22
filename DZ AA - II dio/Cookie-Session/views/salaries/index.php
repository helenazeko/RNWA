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
    <center><h1>Salaries</h1></center>
	<br>

  <a class="btn1" href="?controller=salaries&action=verifyinsert" role="button">Dodaj</a>


  <div class="table-responsive"> 
    <table class="table">
        <tr>
            <th>Emp Number</th>
            <th>Salary</th>
            <th>From date</th>
            <th>To date</th>
            <th>Uredi</th>
            <th>Izbrisi</th>
            
        </tr>
        <?php foreach ($salaries as $row): ?>
        <tr>
            <td><?php echo $row->emp_no ?></td>
            <td><?php echo $row->salary ?></td>
            <td><?php echo $row->from_date ?></td>
            <td><?php echo $row->to_date ?></td>
            <td><a href="?controller=salaries&action=verifyupdate&id=<?php echo $row->emp_no?>" class="btn btn-primary btn-xs"> Uredi</a></td>
            <td><a href="?controller=salaries&action=verifydelete&id=<?php echo $row->emp_no?>" class="btn btn-danger btn-xs"> Izbrisi</a></td>

        </tr>
        <?php endforeach ?>
    </table>
	</div>
  </div>

    
