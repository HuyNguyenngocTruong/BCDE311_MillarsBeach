<?php
include_once ("framework/MySQLDB.php");

function getConnection() {
	$host = 'localhost' ;
	$dbUser ='root';
	$dbPass ='Truonghuy2212&';
	$dbName ='MillarsBeach';

    // create a new database object and connect to server
	$db = new MySQL($host, $dbUser, $dbPass, $dbName);
	return $db; 	
}

function getNewDatabase() {
  
    // create a new database object and connect to server
	$db = getConnection();
	/*
	//  drop the database and then create it again
	try {
		$db->dropDatabase();
	} catch (exception $ex) {
	}
	*/
	$db->createDatabase();

	// select the database
	$db->selectDatabase();
	return $db;
}

function getDatabase() {
  
	$db = getConnection();
	$db->selectDatabase();
	return $db;
}

// gets a parameter from the URL, or null if not specified
function getFromURL ($key) {
	if (isset($_GET[$key])) {
		return $_GET[$key];
	}
	return null;
}

function sqlSafe ($input) {
	$link = mysqli_connect('localhost', 'root', 'Truonghuy2212&');
	return mysqli_real_escape_string($link, stripslashes($input));
}

function getUserID($username, $password) {
    $s='muchsaltiness';
	$u = sqlSafe($username);
	$p = sqlSafe($password); 
	$h = hash('sha256',$p.$s);

    $db = getDatabase();
    $sql = "SELECT userID, password FROM userInfo WHERE userName='$username'";
    $result = $db->query($sql);

	if ($result->size()==1) {
		$row=$result->fetch();
		$hash=$row['password'];
		//echo $hash;
		echo $hash;
		echo $password;
		$id=$row['userID'];
		if ($h==$hash){
			return $id;
		}
		
		if (password_verify($password,$hash)){
			return $id;
		}

		if ($hash==null||$hash=="") {
			$result=$db->query("UPDATE user SET password='$h' WHERE userID=$id");
            return $id;
		}
	}
    return null; 
}
