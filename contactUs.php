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
    $formType = $_POST['form_type'];
    echo $formType;
    if ($formType === 'contact_form') {
        $firstName =$_POST['first-name'];
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

    if ($formType === 'volunteer_form') {
        $name =$_POST['volunteer-name'];
        $email = $_POST['volunteer-email'];
        $phoneNumber = $_POST['volunteer-phone'];
        $availability = $_POST['volunteer-availability'];
        $msg = $_POST['volunteer-message'];

        if ($name && $email) {
            $sql = "INSERT INTO volunteerInfo (fullName,email,phoneNumber,availability,reason,createdAt)
                    VALUES ('$name','$email','$phoneNumber','$availability','$msg',NOW())";
            $db->query($sql);
            header('Location: thank.php');
            exit;
        } else {
            $error = 'Fields cannot be empty.';
        }
    }else {
        $error = "Form did not identify.";
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