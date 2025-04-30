<?php
require_once 'framework/htmlTemplate.php';
require_once 'siteFunctions/commonFunctions.php';
require_once 'siteFunctions/masterPage.php';

	$pg=new masterPage();
	$method=$_SERVER['REQUEST_METHOD'] ;
	$error=null;
	if ($method=='POST') {
		$userName=$_POST['userName'];
		$password=$_POST['password'];
	
		$userID=getUserID($userName,$password);
		echo $userID;
		if ($userID==null) {
			$error='Your login credentials were rejected, please try again.';
		} else {
			$_SESSION['userID']=$userID;
			echo "Session UserID after setting: " . $_SESSION['userID'];
			header('Location: homePage.php');
			exit;
		}
	}

	$login=new HtmlTemplate('login.html');
	$content=$login->getHtml(array());	
	if ($error!=null) {
		$content.='<br/><br/><p class="LoginFail">'.$error.'<p><br/>';
	}

	$pg->setTitle('User Login');
	$pg->setContent($content);
	print $pg->getHtml();


