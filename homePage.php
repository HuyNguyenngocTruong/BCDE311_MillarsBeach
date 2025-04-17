<?php
	include_once 'siteFunctions/commonFunctions.php';
	include_once 'siteFunctions/masterPage.php';
	require_once 'framework/htmlTemplate.php';
    $page = new MasterPage();
    
    $content = "


    <!--Caurosel -->

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
      <h2 class='mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900'>Sign up for receive news</h2>
    </div>

    <div class='mt-10 sm:mx-auto sm:w-full sm:max-w-sm'>
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
  <div>
    <h1 class='mb-4 mt-6 ml-2 text-3xl text-[#228B22] md:text-3xl lg:text-5xl text-center'>
      Welcome to Millars Beach Island
    </h1>

    <!--Map-->
    <div class='w-[90%] mx-auto flex flex-col md:flex-row items-start justify-between gap-10 mt-10 mb-5'>
      <div class='flex flex-col md:flex-row justify-center items-center gap-10 w-[100%] mx-auto md:w-1/2'>            
        <p class='ml-2 text-[#444444] text-base leading-relaxed text-center md:text-left'>
          The Millars Beach Restoration Project is all about giving our native wildlife a fighting chance by keeping pesky predators in check! We’re working hard to reduce the impact of invasive species and help our local birds, plants, and marine life thrive. By managing and suppressing predators, we’re creating a more balanced ecosystem where our wildlife can flourish. 
          With the support of our awesome community, and environmental partners this project is all about protecting Millars Beach and its natural, vibrant self—so we can all enjoy its unique beauty for years to come!
        </p>
      </div>

      <div class='w-full md:w-1/2 flex justify-center md:justify-end'>  
        <iframe src='https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2725.3245921762405!2d168.05231397657496!3d-46.9159999711348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDbCsDU0JzU3LjYiUyAxNjjCsDAzJzE3LjYiRQ!5e0!3m2!1sen!2snz!4v1744445160841!5m2!1sen!2snz' 
          width='100%' height='500' 
          style='border:0;' 
          allowfullscreen='' 
          loading='lazy' 
          referrerpolicy='no-referrer-when-downgrade'>
        </iframe>
      </div>
    </div>
  </div>

  <!-- Main text -->
  <div>
    <h1 class='mb-4 mt-6 ml-2 text-2xl text-[#228B22] md:text-3xl lg:text-4xl text-center'>
      Signature wildlife of Millars Beach Island
    </h1>

    <div class='w-[90%] mx-auto flex flex-row items-stretch justify-between gap-10 mt-10 mb-5'>
      <!-- Text Block -->
      <div class='flex items-center w-full md:w-1/2'>
        <p class='ml-2 text-[#444444] text-base leading-relaxed text-center md:text-left'>
          The Millars Beach Restoration Project is all about giving our native wildlife a fighting chance by keeping pesky predators in check! We’re working hard to reduce the impact of invasive species and help our local birds, plants, and marine life thrive. 
        </p>
      </div>

      <!-- Image Block -->
      <div class='w-full md:w-1/2 flex justify-center items-center'>
        <img src='img\Example.jpeg' alt='Kiwi footages' class='md:w-[80%] h-full max-h-80 object-cover rounded-lg'>
      </div>
    </div>
  </div>

  <div>
    <div class='w-[90%] mx-auto flex flex-row items-stretch justify-between gap-10 mt-10 mb-5'>       
      <!-- Image Block -->
      <div class='w-full md:w-1/2 flex justify-center items-center'>
        <img src='img\Example.jpeg' alt='Kiwi footages' class='w-full md:w-[80%] h-full max-h-80 object-cover rounded-lg'>
      </div>

      <!-- Text Block -->
      <div class='flex items-center w-full md:w-1/2'>
        <p class='ml-2 text-[#444444] text-base leading-relaxed text-center md:text-left'>
          The Millars Beach Restoration Project is all about giving our native wildlife a fighting chance by keeping pesky predators in check! We’re working hard to reduce the impact of invasive species and help our local birds, plants, and marine life thrive. 
        </p>
      </div>
    </div>
  </div>
";


	$page->setTitle('Homepage');
	$page->setContent($content);	
	print $page->getHtml();
?> 