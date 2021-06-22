<?php
  class Employees  {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $emp_no;
    public $birth_date;
    public $first_name;
    public $last_name;
    public $gender;
    public $hire_date;


    public function __construct($emp_no,$birth_date, $first_name, $last_name, $gender , $hire_date) {
      $this->emp_no      = $emp_no;
      $this->birth_date      = $birth_date;
      $this->first_name      = $first_name;
      $this->last_name      = $last_name;
      $this->gender      = $gender;
      $this->hire_date     =$hire_date;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM employees ORDER BY `emp_no` DESC LIMIT 100 ');
      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Employees($post['emp_no'], $post['birth_date'], $post['first_name'], $post['last_name'], $post['gender'], $post['hire_date']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM employees WHERE emp_no = :id');
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Employees($post['emp_no'],$post['birth_date'], $post['first_name'], $post['last_name'], $post['gender'], $post['hire_date']);
    }

    public static function insert($id,$birth_date, $first_name, $last_name, $gender , $hire_date) {
      $db = Db::getInstance();
      $id = intval($id);
      $birth_date = date($birth_date);
      $hire_date=date($hire_date);
      $sql="INSERT INTO employees (emp_no,birth_date, first_name, last_name, gender, hire_date)
      VALUES ('$id','$birth_date', '$first_name', '$last_name', '$gender',' $hire_date')";
      $db->query($sql);
    }

    public static function update($id,$birth_date, $first_name, $last_name, $gender , $hire_date) {
      $db = Db::getInstance();
      $id = intval($id);
      $birth_date = date($birth_date);
      $hire_date=date($hire_date);
      $sql="UPDATE employees SET birth_date = '$birth_date', first_name='$first_name', last_name = '$last_name', gender='$gender', hire_date = '$hire_date'
       WHERE emp_no = '$id' ";
      $db->query($sql);
    }

  	public static function delete($id) {
      $db = Db::getInstance();
      $sql="DELETE FROM employees WHERE emp_no = '$id'";
	    $db->query($sql);
		}
  }
  
?>