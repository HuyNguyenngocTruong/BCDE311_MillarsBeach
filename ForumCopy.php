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
        $description = trim($_POST['description'] ?? '');
        $imageName = $_FILES['postImage']['name'] ?? '';
        $imageTmp = $_FILES['postImage']['tmp_name'] ?? '';
        $uploadPath = 'uploads/' . basename($imageName);

        if ($description && move_uploaded_file($imageTmp, $uploadPath)) {
            $sql = "INSERT INTO forumPosts (userID, imagePath, description, createdAt) VALUES ('$userID', '$uploadPath', '$description', NOW())";
            $db->query($sql);
            header("Location: forum.php");
            exit;
        } else {
            $content .= "<p class='text-red-500 text-center'>Error uploading post. Make sure all fields are filled and image is valid.</p>";
        }
    }
    $content = "

    <!-- Hero Section -->
    <section class='relative w-full h-[80vh] bg-cover bg-center bg-no-repeat' style='background-image: url(\"img/Millars shelter pip.jpg\");'>
      <!-- Overlay -->
      <div class='absolute inset-0 bg-black bg-opacity-40'></div>

      <!-- Text Content -->
      <div class='relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4'>
        <h1 class='text-4xl md:text-5xl lg:text-6xl font-bold mb-4'>
          Forum
        </h1>
        <p class='max-w-2xl text-lg md:text-xl text-gray-200'>
          Share your ideas for helping to restore Millars Beach Island.
        </p>
      </div>
    </section>


";

    // Fetch and display posts
    $stmt = $db->query("SELECT c.Description, c.ImageLink, c.createdAt, u.userName 
                        FROM Content c
                        JOIN userInfo u ON c.userID = u.userID 
                        ORDER BY c.createdAt DESC");

    if ($stmt->size() > 0) {
    while ($post = $stmt->fetch() ) {
        $image = htmlspecialchars($post['ImageLink']);
        $desc = htmlspecialchars($post['Description']);
        $user = htmlspecialchars($post['userName']);
        $date = date('F j, Y', strtotime($post['createdAt']));

        $content .= "
        <div class='bg-white p-6 rounded-xl shadow-md'>
            <img src='$image' alt='Post image' class='w-full max-h-64 object-cover rounded-lg mb-4 border border-gray-300' />
            <p class='text-sm leading-relaxed mb-2'>$desc</p>
            <div class='text-right text-xs text-gray-500'>
                Posted by <span class='font-semibold'>$user</span> on $date
            </div>
        </div>";
    }
    }

    $page->setTitle('Forum');
	$page->setContent($content);	
	print $page->getHtml();
?> 




    <div class='flex flex-col items-center mt-10 px-4'>
      <div class='w-full max-w-5xl'>
        <div class='flex flex-col md:flex-row items-center justify-between mb-6'>
          <h2 class='text-2xl md:text-3xl font-semibold text-[#228B22] mb-4 md:mb-0 text-center md:text-left'>
            Community Posts
          </h2>
          <button class='bg-[#228B22] text-white px-5 py-2 rounded-full hover:bg-green-700 transition'>
            <i class='fas fa-plus mr-2'></i>Create New Post
          </button>
        </div>

        <div class='space-y-6'>
          <!-- Post 1 -->
          <div class='bg-white p-6 rounded-xl shadow-md'>
            <img src='uploads/forest.jpg' alt='Post image' class='w-full max-h-64 object-cover rounded-lg mb-4 border border-gray-300' />
            <p class='text-sm leading-relaxed mb-2'>
              Took this shot while hiking near Millars Beach. It's amazing to see how restoration efforts are paying off!
            </p>
            <div class='text-right text-xs text-gray-500'>
              Posted by <span class='font-semibold'>NatureLover88</span> on April 29, 2025
            </div>
          </div>

          <!-- Post 2 -->
          <div class='bg-white p-6 rounded-xl shadow-md'>
            <img src='uploads/clean_up.jpg' alt='Post image' class='w-full max-h-64 object-cover rounded-lg mb-4 border border-gray-300' />
            <p class='text-sm leading-relaxed mb-2'>
              We organized a beach cleanup last weekend! Proud of the team — here’s a photo of some of the collected waste.
            </p>
            <div class='text-right text-xs text-gray-500'>
              Posted by <span class='font-semibold'>EcoWarrior</span> on April 28, 2025
            </div>
          </div>

          <!-- Post 3 -->
          <div class='bg-white p-6 rounded-xl shadow-md'>
            <img src='uploads/seedlings.jpg' alt='Post image' class='w-full max-h-64 object-cover rounded-lg mb-4 border border-gray-300' />
            <p class='text-sm leading-relaxed mb-2'>
              Just planted 200+ native seedlings! Can’t wait to see them thrive in a few years 🌱
            </p>
            <div class='text-right text-xs text-gray-500'>
              Posted by <span class='font-semibold'>GreenThumb</span> on April 27, 2025
            </div>
          </div>
        </div>
      </div>
    </div>