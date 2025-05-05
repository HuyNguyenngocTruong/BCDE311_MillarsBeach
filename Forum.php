<?php
	include_once 'siteFunctions/commonFunctions.php';
	include_once 'siteFunctions/masterPage.php';
	require_once 'framework/htmlTemplate.php';
    $page = new MasterPage();
    
    $content = "



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

";

    $page->setTitle('Forum');
	$page->setContent($content);	
	print $page->getHtml();
?> 