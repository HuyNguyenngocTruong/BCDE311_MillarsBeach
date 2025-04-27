<?php
	include_once 'siteFunctions/commonFunctions.php';
	include_once 'siteFunctions/masterPage.php';
	require_once 'framework/htmlTemplate.php';
    $page = new MasterPage();
    
    $content = "


    <!--Caurosel -->
<div class='w-[90%] mx-auto'>
    <div class='relative mx-auto mt-10 overflow-hidden rounded-xl w-[80%] md:w-full max-w-3xl'>
      <div id='carousel-images' class='flex transition-transform duration-700 ease-in-out'>
        <img src='img/Example.jpeg' class='w-full flex-shrink-0' />
        <img src='img/Example.jpeg' class='w-full flex-shrink-0' />
        <img src='img/Example.jpeg' class='w-full flex-shrink-0' />
      </div>

      <!-- Navigation buttons -->
      <button onclick='prevSlide()' class='absolute top-1/2 left-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md hover:bg-green-500 hover:text-white'>
        <i class='fa-solid fa-chevron-left'></i>
      </button>
      <button onclick='nextSlide()' class='absolute top-1/2 right-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md hover:bg-green-500 hover:text-white'>
        <i class='fa-solid fa-chevron-right'></i>
      </button>

      <div id='carousel-indicators' class='flex justify-center mt-4 gap-2'>
        <!-- Dots will be inserted dynamically -->
      </div>
    </div>
    <!--End-->

    <!-- Form -->
  <div class='flex min-h-full flex-col justify-center px-6 py-12 lg:px-8'>
    <div class='sm:mx-auto sm:w-full sm:max-w-sm'>
      <h2 class='mt-4 text-center text-2xl/9 font-bold tracking-tight text-gray-900'>Sign up for receive news</h2>
    </div>

    <div class='mt-6 sm:mx-auto sm:w-full sm:max-w-sm'>
      <form class='space-y-6' action='#' method='POST'>
        <div>
          <label for='email' class='block text-sm/6 font-medium text-gray-900'>Email address</label>
          <div class='mt-2'>
            <input type='email' name='email' id='email' autocomplete='email' required class='block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6'>
          </div>
        </div>

        <div>
          <button type='submit' class='flex w-full justify-center rounded-md bg-[#228B22] px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'>
            Sign Up
          </button>
        </div>
      </form>
    </div>
  </div>

  <!--Body Paragraph Start-->
  <div class='w-[80%] items-center mx-auto'>
    <h1 class='mb-4 mt-6 ml-2 text-2xl text-[#228B22] md:text-3xl lg:text-4xl text-center'>
      Welcome to Millars Beach Island
    </h1>

    <!--Map-->
    <div class='w-[100%] mx-auto flex flex-col md:flex-row items-start justify-between gap-10 mt-10 mb-5'>
      <div class='flex flex-col md:flex-row justify-center items-center gap-10 w-[100%] mx-auto md:w-1/2'>            
        <p class='ml-2 text-[#444444] text-base leading-relaxed text-left md:text-left'>
          The Millars Beach Restoration Project is all about giving our native wildlife a fighting chance by keeping pesky predators in check! We’re working hard to reduce the impact of invasive species and help our local birds, plants, and marine life thrive. By managing and suppressing predators, we’re creating a more balanced ecosystem where our wildlife can flourish. 
          With the support of our awesome community, and environmental partners this project is all about protecting Millars Beach and its natural, vibrant self—so we can all enjoy its unique beauty for years to come!
        </p>
      </div>

      <div id = 'map' class='w-full md:w-1/2 h-[400px] flex justify-center md:justify-end'>  
      </div>
    </div>
  </div>

  <!-- Main text -->
  <div>
    <h1 class='mb-4 mt-6 ml-2 text-2xl text-[#228B22] md:text-3xl lg:text-4xl text-center'>
      Signature wildlife of Millars Beach Island
    </h1>

    <div class='w-[90%] mx-auto flex flex-row items-stretch justify-between gap-10 mt-10 mb-5'>
      
    <!-- Image Block -->
      <div class='w-[500px] h-[200px] md:w-1/2 md:h-1/2 flex justify-center items-center'>
        <img src='img\Example.jpeg' alt='Kiwi footages' class='md:w-[80%] h-full max-h-80 object-cover rounded-lg'>
      </div>

    <!-- Text Block -->
      <div class='flex items-center w-full md:w-1/2'>
        <p class='ml-2 text-[#444444] text-base leading-relaxed text-left md:text-left'>
          The Millars Beach Restoration Project is all about giving our native wildlife a fighting chance by keeping pesky predators in check! We’re working  
        </p>
      </div>

    </div>
  </div>

  <div>
    <div class='w-[90%] mx-auto flex flex-row items-stretch justify-between gap-10 mt-10 mb-5'>       
      
      <!-- Text Block -->
      <div class='flex items-center w-full md:w-1/2'>
        <p class='ml-2 text-[#444444] text-base leading-relaxed text-left md:text-left'>
          The Millars Beach Restoration Project is all about giving our native wildlife a fighting chance by keeping pesky predators in check! We’re working  
        </p>
      </div>
      <!-- Image Block -->
      <div class='w-[500px] h-[200px] md:w-1/2 md:h-1/2 flex justify-center items-center'>
        <img src='img\Example.jpeg' alt='Kiwi footages' class='w-full md:w-[80%] h-full max-h-80 object-cover rounded-lg'>
      </div>

    </div>
  </div>
</div>
";


	$page->setTitle('Homepage');
	$page->setContent($content);	
	print $page->getHtml();
?> 