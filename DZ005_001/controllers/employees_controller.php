<?php
  class EmployeesController {
    public function index() {
      // we store all the posts in a variable
      $employees = Employees::all();
      require_once('views/employees/index.php');
    }
  
    public function verifyinsert(){
      require_once('views/employees/insert.php');
    }

    public function insert()
    {
      Employees::insert($_POST['emp_no'],$_POST['birth_date'],$_POST['first_name'],$_POST['last_name'],$_POST['gender'],$_POST['hire_date']);
     return call('employees', 'index');
    }
  
  public function verifyupdate()
  {
    if (!isset($_GET['id']))
          return call('pages', 'error');
    $employees = Employees::find($_GET['id']);
    require_once('views/employees/update.php');
  }

  public function update()
  {
   
   Employees::update($_POST['emp_no'],$_POST['birth_date'],$_POST['first_name'],$_POST['last_name'],$_POST['gender'],$_POST['hire_date']);
   return call('employees', 'index');
  }

	public function delete() {
      if (!isset($_GET['id']))
        return call('pages', 'error');
      Employees::delete($_GET['id']);
      return call('employees', 'index');
    }

    public function verifydelete(){
      if (!isset($_GET['id']))
          return call('pages', 'error');
          require_once('views/employees/delete.php');
      }
  }
 ?>