<?php 
    // Database connection
	$dsn = 'mysql:dbname=shellshop;host=localhost';
	$user = 'root';
	$password = '';
	$db = new PDO($dsn, $user, $password);

	// getSells Function
	function getSells($id){

		global $db;
		 $getSells = $db->prepare("SELECT * FROM article WHERE seller = ?");
    	  $getSells->execute(array($id));
    	 $sells = $getSells->rowCount();
    	return $sells;

	}

	// feedBack Function
	function feedBack($user){

		global $db;
		 $good = "good";
		  $bad = "bad";
		   $feedBackPositive = $db->prepare("SELECT * FROM feedback WHERE user = ? AND result = ?");
		    $feedBackPositive->execute(array($user, $good));
		     $feedBackNegative = $db->prepare("SELECT $ FROM feedback WHERE user = ? AND result = ?");
		    $feedBackNegative->execute(array($user, $bad));
		   $goodBack = $feedBackPositive->rowCount();
		  $badBack = $feedBackNegative->rowCount();
		 $ratio = $goodBack/$badBack*100;
		return $ratio;

	}

	// countPost Function
	function countPost(){

		global $db;
		 $getPost = $db->prepare('SELECT * FROM article');
		  $getPost->execute();
		 $countPost = $getPost->rowCount();
		return $countPost;

	}

	// countUsers Function
	function countUsers(){

		global $db;
		 $getUsers = $db->prepare('SELECT * FROM users');
		  $getUsers->execute();
		 $countUsers = $getUsers->rowCount();
		return $countUsers;

	}

?>