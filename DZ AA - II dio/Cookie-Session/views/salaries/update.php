<div class="container">
<form action="?controller=salaries&action=update" method="POST">
  <div class="form-group">
    <label for="emp_no">Employee Number:</label>
    <input type="text" class="form-control" name="emp_no" value=<?php echo $salaries->emp_no?>>
    </div>
    <div class="form-group">
    <label for="salary">Salary:</label>
    <input type="text" class="form-control" name="salary" value=<?php echo $salaries->salary?>>
  </div>
  <div class="form-group">
    <label for="from_date">From date:</label>
    <input type="text" class="form-control" name="from_date" value=<?php echo $salaries->from_date?>>
  </div>
  <div class="form-group">
    <label for="to_date">To date:</label>
    <input type="text" class="form-control" name="to_date" value=<?php echo $salaries->to_date?>>
  </div>
 
    <button type="submit" class="btn btn-default">Confirm</button>
</form> 
</div>