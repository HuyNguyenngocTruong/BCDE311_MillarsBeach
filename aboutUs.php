<?php
	include_once 'siteFunctions/commonFunctions.php';
	include_once 'siteFunctions/masterPage.php';
	require_once 'framework/htmlTemplate.php';
    $page = new MasterPage();
    
    $content = "
    <div class='flex flex-col items-center'>
  <!-- Centered About Us -->
  <h1 class='text-3xl mt-6 md:text-4xl leading-none tracking-tight text-[#228B22]'>About Us</h1>

  <!-- Our story aligned to left of heading above -->
  <div class='w-[80%] md:w-[45%] lg:w-[35%] text-left mt-5'>
    <h2 class='text-2xl md:text-3xl leading-none tracking-tight text-[#333333]'>Our Story</h2>
    <p class='mt-2'>
      <li class='mb-2'>
        Overview: Explain what the initiative is about – our mission, history, and goals.
      </li>
      <li class='mb-2'>
        Why It’s Important: Discuss the importance of suppressing predators (like rats, cats, and possums) for preserving native wildlife, biodiversity, and the overall ecosystem of Rakiura.
      </li>
      <li>
        The Process: Tech and Innovation: Highlight any innovative technologies or methods being used, (e.g. AT550’s, GPS tracking, camera monitoring, or new trapping systems).
      </li>
    </p>

    <h2 class='mt-3 text-2xl md:text-3xl leading-none tracking-tight text-[#333333]'>Our Vision</h2>
    <p class='mt-2'>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>

    <h2 class='mt-3 text-2xl md:text-3xl leading-none tracking-tight text-[#333333]'>Our Value</h2>
    <p class='mt-2'>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>

    <h2 class='mt-3 text-2xl md:text-3xl leading-none tracking-tight text-[#333333]'>Our Location</h2>
    <div id='map' class='w-full h-[300px] mt-2 rounded-lg overflow-hidden shadow-md'></div>

    <h2 class='mt-3 text-2xl md:text-3xl leading-none tracking-tight text-[#333333]'>Our Team</h2>
    <img src='' alt='Image of all people in the teams'>
    <p class='mt-2'>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
  </div>
</div>

    ";

    $page->setTitle('About Us');
	$page->setContent($content);	
	print $page->getHtml();
?> 