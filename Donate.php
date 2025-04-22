<?php
	include_once 'siteFunctions/commonFunctions.php';
	include_once 'siteFunctions/masterPage.php';
	require_once 'framework/htmlTemplate.php';
    $page = new MasterPage();
    
    $content = "
      <div class='flex flex-col items-center'>
  <h1 class='capitalize text-3xl md:text-4xl leading-none tracking-tight text-[#228B22]'>Donate for helping project</h1>
  <button class='mt-6 bg-[#228B22] text-white px-5 py-2 hover:bg-[#a6c1ee]'>
    <a href=''>Donate Now</a>
  </button>

  <div class='max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md mt-6'>
    <!-- Total Raised -->
    <div class='text-center'>
      <h2 class='text-gray-600 text-sm'>We’ve raised</h2>
      <p class='text-3xl font-bold text-gray-800'>$10.000</p>
      <p class='text-gray-600 text-sm'>Of our target <span class='font-semibold'>$50,000</span></p>
      <div class='w-full bg-gray-200 rounded-full h-2.5 mt-4'>
        <div class='bg-blue-900 h-2.5 rounded-full' style='width: 40.7%;'></div>
      </div>
    </div>

    <!-- Stats Grid -->
    <div class='grid text-center mt-6 text-sm text-gray-700'>
      <div class='flex items-center justify-center gap-x-4'>
        <!-- Icon -->
        <i class='fa-solid fa-hand-holding-dollar text-3xl'></i>

        <!-- Number + Label -->
        <div class='text-left'>
          <div class='text-2xl font-semibold'>1,035</div>
          <p>Donations</p>
        </div>
      </div>
    </div>

    <!-- Search -->
    <div class='mt-4'>
      <input type='text' placeholder='Find a fundraiser'
        class='w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500'>
    </div>

    <!-- Leaderboard List -->
    <ul class='mt-6 space-y-4'>
      <li class='flex items-center justify-between'>
        <div class='flex items-center space-x-3'>
          <span class='text-sm font-medium text-gray-600'>1.</span>
          <img src='' alt='avatar' class='w-10 h-10 rounded-full'>
          <span class='text-gray-800'>Name</span>
        </div>
        <span class='font-semibold text-gray-800'>$3,297.15</span>
      </li>

      <li class='flex items-center justify-between'>
        <div class='flex items-center space-x-3'>
          <span class='text-sm font-medium text-gray-600'>2.</span>
          <img src='' alt='avatar' class='w-10 h-10 rounded-full'>
          <span class='text-gray-800'>Name</span>
        </div>
        <span class='font-semibold text-gray-800'>$2,316.70</span>
      </li>

      <!-- Add more list items as needed -->
    </ul>
  </div>
</div>
    ";


	$page->setTitle('Donate');
	$page->setContent($content);	
	print $page->getHtml();
?> 