<?php
include_once ("framework/MySQLDB.php");

function getConnection() {
	$host = 'localhost' ;
	$dbUser ='root';
	$dbPass ='Truonghuy2212&';
	$dbName ='AgoraDatabase';

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
	$link = mysqli_connect('localhost', 'root', '', 'roombookings');
	return mysqli_real_escape_string($link, stripslashes($input));
}

function getUserID($username, $password, $userType = 'buyer') {
    $salt = 'muchsaltiness';
    $username = sqlSafe($username);
    $password = sqlSafe($password);
    $passwordHash = hash('sha256', $password . $salt);

    $db = getDatabase();
    $sql = "SELECT userID, passwordHash, businessAccountID FROM members WHERE login='$username' AND userType='$userType'";
    $result = $db->query($sql);

    if ($result->size() == 1) {
        $row = $result->fetch();
        $storedHash = $row['passwordHash'];
        $userID = $row['userID'];
        $businessAccountID = $row['businessAccountID']; // Null if not connected to a business account

        // Validate password hash
        if ($passwordHash == $storedHash) {
            // Check if user has a business account connected
            if ($userType == 'seller' && $businessAccountID == null) {
                // Optional: add a check or log message to inform the seller to connect a business account
                echo "Warning: Seller profile is not connected to a business account.";
            }
            return $userID; // Return user ID if authentication is successful
        }
        // If password hash is missing, update it with the new hash and authenticate the user
        if (empty($storedHash)) {
            $updateSql = "UPDATE members SET passwordHash='$passwordHash' WHERE userID=$userID";
            $db->query($updateSql);
            return $userID;
        }
    }
    return null; 
}
