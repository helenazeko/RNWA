<div class="container">
<form action="?controller=employees&action=update" method="POST">
  <div class="form-group">
    <label for="emp_no">Employee Number:</label>
    <input type="text" class="form-control" name="emp_no" value=<?php echo $employees->emp_no?>>
    </div>
    <div class="form-group">
    <label for="birth_date">Datum rodenja:</label>
    <input type="text" class="form-control" name="birth_date" value=<?php echo $employees->birth_date?>>
  </div>
  <div class="form-group">
    <label for="first_name">Ime:</label>
    <input type="text" class="form-control" name="first_name" value=<?php echo $employees->first_name?>>
  </div>
  <div class="form-group">
    <label for="last_name">Prezime:</label>
    <input type="text" class="form-control" name="last_name" value=<?php echo $employees->last_name?>>
  </div>
  <div class="form-group">
    <label for="gender">Spol:</label>
    <input type="text" class="form-control" name="gender" value=<?php echo $employees->gender?>>
  </div>
  <div class="form-group">
    <label for="hire_date">Datum zaposlenja:</label>
    <input type="text" class="form-control" name="hire_date" value=<?php echo $employees->hire_date?>>
  </div>
    <button type="submit" class="btn btn-default">Confirm</button>
</form> 
</div>