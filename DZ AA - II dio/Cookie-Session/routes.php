<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');
    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
	    case 'employees':
        require_once('models/employees.php');
		$controller = new EmployeesController();
      break;
      case 'salaries':
        require_once('models/salaries.php');
		$controller = new SalariesController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' 		=> ['home', 'error'],
                       'employees' 	=> ['index','verifyinsert','insert','verifyupdate','update','delete','verifydelete'],
                       'salaries' 	=> ['index','verifyinsert','insert','verifyupdate','update','delete','verifydelete']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>