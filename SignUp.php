<?php
require_once 'framework/htmlTemplate.php';
require_once 'siteFunctions/commonFunctions.php';
require_once 'siteFunctions/masterPage.php';

$pg=new masterPage();
$method=$_SERVER['REQUEST_METHOD'] ;
$db = $pg->getDB();

if ($method == "POST") {
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $mobileNo = $_POST['phoneNumber'];

    if (empty($userName) || empty($password) || empty($email)) {
        echo "Username, password, and email are required!";
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "Insert into userInfo (userName, password, email, firstName, 
    lastName, mobileNum) VALUES 
    ('$userName','$hashedPassword','$email','$firstName','$lastName', '$mobileNo')";
    $db->query($sql);
    
    // Retrieve the last inserted user ID
    $userIDQuery = "SELECT userID FROM userInfo WHERE userName = '$userName'";
    $result = $db->query($userIDQuery);
    $userID = $result->fetch()['userID'];


    // Redirect after successful registration
    header("Location: login.php");
    exit;

}

$editProfile=new HtmlTemplate('SignUp.html');
$content=$editProfile->getHtml(array());	
$pg->setTitle('Sign Up');
$pg->setContent($content);
print $pg->getHtml();