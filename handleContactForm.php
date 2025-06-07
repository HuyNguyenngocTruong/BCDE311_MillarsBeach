<?php
require_once 'framework/htmlTemplate.php';
require_once 'siteFunctions/commonFunctions.php';
require_once 'siteFunctions/masterPage.php';

$pg = new masterPage();
$method=$_SERVER['REQUEST_METHOD'] ;
$db = $pg->getDB();
$error = null;
$content = null;

if ($method == "POST") {
        $firstName =$_POST['first_name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $source = $_POST['source'];

        if ($firstName && $email && $message) {
            $sql = "INSERT INTO ContactUs (firstName, lastName, email, message, hearAboutUs,createdAt)
            VALUES ('$firstName','$surname','$email','$message','$source',NOW())";
            $db->query($sql);
            header('Location: thank.php');
            exit;
            
        } else {
            $error = 'Fields cannot be empty.';
        }

}

if ($error != null) {
    $content .= '<p class="error" style="color:red; margin-top:1rem;">' . htmlspecialchars($error) . '</p>';
}

$editProfile=new HtmlTemplate('contactUsPage.html');
$content=$editProfile->getHtml(array());
$pg->setTitle('Contact Us Page');
$pg->setContent($content);
print $pg->getHtml();