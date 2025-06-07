<?php
require_once 'framework/htmlTemplate.php';
require_once 'siteFunctions/commonFunctions.php';
require_once 'siteFunctions/masterPage.php';

$pg = new masterPage();
$method=$_SERVER['REQUEST_METHOD'] ;
$error = null;

if ($method=='POST') {
    // Get raw email input
    $email = $_POST['email'];

    if ($email) {
        $db = getDatabase();
        $emailSafe = sqlSafe($email);

        // Optional: check if email already exists
        $check = $db->query("SELECT * FROM subscription WHERE email = '$emailSafe'");
        if ($check->size() > 0) {
            $error = "This email is already subscribed.";
        } else {
            // Insert new email
            $db->query("INSERT INTO subscription (email, subscribed_at) VALUES ('$emailSafe', NOW())");
            header('Location: thank.php');
            exit;
        }
    } else {
        $error = "Email field cannot be empty.";
    }
}

// Output the form with error (if any)
$content = null;
if ($error != null) {
    $content .= '<p class="error" style="color:red; margin-top:1rem;">' . htmlspecialchars($error) . '</p>';
}

$pg->setTitle('Subscribe');
$pg->setContent($content);
print $pg->getHtml();
