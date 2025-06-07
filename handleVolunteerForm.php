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
        $name =$_POST['volunteer_name'];
        $email = $_POST['volunteer_email'];
        $phoneNumber = $_POST['volunteer_phone'];
        $availability = $_POST['volunteer_availability'];
        $msg = $_POST['volunteer_message'];

        if ($name && $email) {
            $sql = "INSERT INTO volunteerInfo (fullName,email,phoneNumber,availability,reason,createdAt)
                    VALUES ('$name','$email','$phoneNumber','$availability','$msg',NOW())";
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