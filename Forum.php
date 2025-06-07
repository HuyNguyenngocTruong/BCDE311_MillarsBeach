<?php
include_once 'siteFunctions/commonFunctions.php';
include_once 'siteFunctions/masterPage.php';
require_once 'framework/htmlTemplate.php';


$page = new MasterPage();
$db = $page->getDB();
$content = "";

// Handle post submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['userID'])) {
        header("Location: login.php");
        exit;
    }

    $userID = $_SESSION['userID'];
    $title = addslashes(trim($_POST['title'] ?? ''));
    $description = addslashes(trim($_POST['description'] ?? ''));
    $imageName = $_FILES['postImage']['name'] ?? '';
    $imageTmp = $_FILES['postImage']['tmp_name'] ?? '';
    $uploadPath = 'uploads/' . basename($imageName);

    if ($description && move_uploaded_file($imageTmp, $uploadPath)) {
        $sql = "INSERT INTO content (userID,title, ImageLink, description, createdAt) VALUES ('$userID','$title' ,'$uploadPath', '$description', NOW())";
        $db->query($sql);
        header("Location: forum.php");
        exit;
    } else {
        $content .= "<p class='text-red-500 text-center'>Error uploading post. Make sure all fields are filled and image is valid.</p>";
    }
}

// Display hero section
$content .= "
<section class='relative w-full h-[80vh] bg-cover bg-center bg-no-repeat' style='background-image: url(\"img/Millars shelter pip.jpg\");'>
  <div class='absolute inset-0 bg-black bg-opacity-40'></div>
  <div class='relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4'>
    <h1 class='text-4xl md:text-5xl lg:text-6xl font-bold mb-4'>Forum</h1>
    <p class='max-w-2xl text-lg md:text-xl text-gray-200'>
      Share your ideas for helping to restore Millars Beach Island.
    </p>
  </div>
</section>

<div class='flex flex-col items-center mt-10 px-4'>
  <div class='w-full max-w-5xl'>
    <div class='flex flex-col md:flex-row items-center justify-between mb-6'>
      <h2 class='text-2xl md:text-3xl font-semibold text-[#228B22] mb-4 md:mb-0 text-center md:text-left'>
        Community Posts
      </h2>";

if (isset($_SESSION['userID'])) {
    $content .= "
      <form method='POST' enctype='multipart/form-data' class='bg-white p-4 rounded shadow-md w-full max-w-2xl mx-auto mb-8'>
        <h3 class='text-lg font-semibold mb-2'>Create New Post</h3>
        <textarea name='title' required class='w-full p-2 border border-gray-300 rounded mb-2' placeholder='Title'></textarea>
        <textarea name='description' required class='w-full p-2 border border-gray-300 rounded mb-2' placeholder='Share your idea...'></textarea>
        <input type='file' name='postImage' accept='image/*' required class='w-full p-2 border border-gray-300 rounded mb-2 cursor-pointer' />
        <button type='submit' class='bg-[#228B22] text-white px-4 py-2 rounded hover:bg-green-700'>Post</button>
      </form>"
      ;
      
} else {
    $content .= "
      <a href='login.php' class='bg-[#228B22] text-white px-5 py-2 rounded-full hover:bg-green-700 transition'>
        <i class='fas fa-sign-in-alt mr-2'></i>Login to Create Post
      </a>";
}

$content .= "</div><div class='space-y-6'>";

// Fetch and display posts
$stmt = $db->query("SELECT c.Description, c.ImageLink, c.createdAt, u.userName,c.title 
                    FROM Content c
                    JOIN userInfo u ON c.userID = u.userID 
                    ORDER BY c.createdAt DESC");

if ($stmt->size() > 0) {
  while ($post = $stmt->fetch() ) {
      $image = htmlspecialchars($post['ImageLink']);
      $desc = htmlspecialchars($post['Description']);
      $title = htmlspecialchars($post['title']);
      $user = htmlspecialchars($post['userName']);
      $date = date('F j, Y', strtotime($post['createdAt']));

      $content .= "
      <div class='bg-gray-100 p-5 rounded-xl shadow border border-gray-300 max-w-md mx-auto'>
        <div class='flex items-center mb-4'>
          <div>
            <p class='font-semibold text-sm text-gray-900'>$user <span class='text-emerald-500'>●</span></p>
            <p class='text-xs text-gray-500'>$date · Community Member</p>
          </div>
        </div>

        <h2 class='text-lg font-bold text-green-700 mb-2'>$title</h2>

        <p class='text-sm text-gray-800 mb-4 line-clamp-3'>$desc</p>

        <div class='w-full h-48 overflow-hidden rounded-lg bg-gray-200 mb-4'>
          <img src='$image' alt='Post image' class='w-full h-full object-cover' />
        </div>
      </div>";

  }
}

$content .= "</div></div></div>";

$page->setTitle('Forum');
$page->setContent($content);
print $page->getHtml();
?>
