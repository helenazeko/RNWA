<div class="container">
<form action="?controller=employees&action=insert" method="POST">
 <div class="form-group">
    <label for="emp_no">Emp number:</label>
    <input type="text" class="form-control" name="emp_no">
    </div>
   <div class="form-group">
    <label for="birth_date">Datum rođenja:</label>
    <input type="text" class="form-control" name="birth_date">
  </div>
  <div class="form-group">
    <label for="first_name">Ime:</label>
    <input type="text" class="form-control" name="first_name">
  </div>
  <div class="form-group">
    <label for="last_name">Prezime:</label>
    <input type="text" class="form-control" name="last_name">
  </div>
  <div class="form-group">
    <label for="gender">Spol:</label>
    <input type="text" class="form-control" name="gender" >
  </div>
  <div class="form-group">
    <label for="hire_date">Datum zaposlenja:</label>
    <input type="text" class="form-control" name="hire_date" >
  </div>
    <button type="submit" class="btn btn-default">Potvrdi</button>
</form> 
</div>