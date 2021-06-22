<?php
  class Salaries  {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $emp_no;
    public $salary;
    public $from_date;
    public $to_date;

    public function __construct($emp_no,$salary,$from_date, $to_date) {
      $this->emp_no      = $emp_no;
      $this->salary      = $salary;
      $this->from_date      = $from_date;
      $this->to_date      = $to_date;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM salaries ORDER BY `emp_no` ASC LIMIT 100 ');
      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Salaries($post['emp_no'], $post['salary'], $post['from_date'], $post['to_date']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM salaries WHERE emp_no = :id');
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Salaries($post['emp_no'],$post['salary'], $post['from_date'], $post['to_date']);
    }

    public static function insert($id,$salary, $from_date , $to_date) {
      $db = Db::getInstance();
      $id = intval($id);
      $salary = intval($salary);
      $from_date = date($from_date);
      $to_date=date($to_date);
      $sql="INSERT INTO salaries (emp_no,salary,from_date, to_date)
      VALUES ('$id','$salary', '$from_date', '$to_date')";
      $db->query($sql);
    }

    public static function update($id,$salary, $from_date, $to_date) {
      $db = Db::getInstance();
      $id = intval($id);
      $from_date = date($from_date);
      $to_date=date($to_date);
      $sql="UPDATE salaries SET salary = '$salary', from_date = '$from_date', to_date='$to_date'
       WHERE emp_no = '$id' AND from_date='$from_date' ";
      $db->query($sql);
    }

  	public static function delete($id) {
      $db = Db::getInstance();
      $sql="DELETE FROM salaries WHERE emp_no = '$id'";
	    $db->query($sql);
		}
  }
  
?>