<?php
// Connect to database
	include("../connection.php");
	include("../functions.php");
	$db = new dbObj();
	$connection =  $db->getConnstring();
	

	 /******************************************************/

	$request_method=$_SERVER["REQUEST_METHOD"];

	
	switch($request_method)
	 {
	 case 'GET':
	       // Retrive Products
	      if(!empty($_GET["id"]))
	      {
	          $id=intval($_GET["id"]);
	          get_posts($id);
	      }
	      else
	      {
	          get_posts();
	      }
	      break;


	      case 'POST':
	// Insert Product
	      insert_posts();
	      break;

	      case 'PUT':
	// Update Product
	       if (isset($_GET["id"])){
	        	$id=intval($_GET["id"]);
		        update_posts($id);				
	       }
	       else{
		        header('Content-Type: application/json');
		        echo json_encode("Error while calling method and parametars");
		
	       }				
	      break;

	      case 'DELETE':
	// Delete Product
	       if(isset($_GET["id"])){
	           $id=intval($_GET["id"]);
	           delete_posts($id);
		   }
		   else {
			header('Content-Type: application/json');
			echo json_encode("Error while calling method and parametars");
		   }
	      break;

    default:
	// Invalid Request Method
	header("HTTP/1.0 405 Method Not Allowed");
	break;


	 }
?>