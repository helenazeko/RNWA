<?php
  class SalariesController {
    public function index() {
      // we store all the posts in a variable
      $salaries = Salaries::all();
      require_once('views/salaries/index.php');
    }
  
    public function verifyinsert(){
      require_once('views/salaries/insert.php');
    }

    public function insert()
    {
      Salaries::insert($_POST['emp_no'],$_POST['salary'],$_POST['from_date'],$_POST['to_date']);
     return call('salaries', 'index');
    }
  
  public function verifyupdate()
  {
    if (!isset($_GET['id']))
          return call('pages', 'error');
    $salaries = Salaries::find($_GET['id']);
    require_once('views/salaries/update.php');
  }

  public function update()
  {
   
   Salaries::update($_POST['emp_no'],$_POST['salary'],$_POST['from_date'],$_POST['to_date']);
   return call('salaries', 'index');
  }

	public function delete() {
      if (!isset($_GET['id']))
        return call('pages', 'error');
      Salaries::delete($_GET['id']);
      return call('salaries', 'index');
    }

    public function verifydelete(){
      if (!isset($_GET['id']))
          return call('pages', 'error');
          require_once('views/salaries/delete.php');
      }
  }
 ?>