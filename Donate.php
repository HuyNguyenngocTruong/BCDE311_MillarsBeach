<?php
	include_once 'siteFunctions/commonFunctions.php';
	include_once 'siteFunctions/masterPage.php';
	require_once 'framework/htmlTemplate.php';
    $page = new MasterPage();
    
    $content = "

    <!-- Hero Section -->
    <section class='relative w-full h-[80vh] bg-cover bg-center bg-no-repeat' style='background-image: url(\"img/DJI_0061.JPG\");'>
      <!-- Overlay -->
      <div class='absolute inset-0 bg-black bg-opacity-40'></div>

      <!-- Text Content -->
      <div class='relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4'>
        <h1 class='text-4xl md:text-5xl lg:text-6xl font-bold mb-4'>
          Donate to Our Project
        </h1>
        <p class='max-w-2xl text-lg md:text-xl text-gray-200'>
            Contribute to the Nature
        </p>
      </div>
    </section>

    <div class='flex flex-col items-center'>
      <h1 class='capitalize text-3xl text-center md:text-4xl mt-6 leading-none tracking-tight text-[#222222] font-semibold'>Why Donate to Millars Beach Island Project</h1>
      
      <p class='max-w-3xl mx-auto mt-4 text-gray-700 text-base md:text-md md:leading-9 leading-8 text-justify px-6'>
        Your donation directly supports the protection of native wildlife, restoration of natural habitats, and community-led conservation efforts at Millars Beach Island. Every contribution, big or small, helps us maintain predator control, plant native species, and educate future generations on the importance of preserving our coastal ecosystems.
      </p>

      <button class='mt-6 bg-[#228B22] text-white px-5 py-2 hover:bg-[#a6c1ee]'>
        <a href='https://giveatrap.org.nz/groups/millars-beach-restoration-project'>Donate Now</a>
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

    <hr class = 'mt-4'>

    <section class='bg-gray-100 py-16'>
      <div class='max-w-7xl mx-auto px-6 text-center'>
        <h2 class='text-3xl font-bold text-gray-900 mb-12'>By the Numbers</h2>
        <div class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10'>
          
          <!-- Item 1 -->
          <div class='flex flex-col items-center'>
            <i class='fas fa-globe text-green-700 text-4xl mb-4'></i>
            <p class='text-2xl font-semibold text-gray-900'>70+</p>
            <p class='text-gray-700 mt-2'>We impact conservation in over 70 countries and territories.</p>
          </div>

          <!-- Item 2 -->
          <div class='flex flex-col items-center'>
            <i class='fas fa-fish text-green-700 text-4xl mb-4'></i>
            <p class='text-2xl font-semibold text-gray-900'>100+</p>
            <p class='text-gray-700 mt-2'>We operate more than 100 marine conservation projects.</p>
          </div>

          <!-- Item 3 -->
          <div class='flex flex-col items-center'>
            <i class='fas fa-microscope text-green-700 text-4xl mb-4'></i>
            <p class='text-2xl font-semibold text-gray-900'>400+</p>
            <p class='text-gray-700 mt-2'>We have more than 400 scientists on staff.</p>
          </div>

          <!-- Item 4 -->
          <div class='flex flex-col items-center'>
            <i class='fas fa-tree text-green-700 text-4xl mb-4'></i>
            <p class='text-2xl font-semibold text-gray-900'>125M+</p>
            <p class='text-gray-700 mt-2'>We have protected more than 125 million acres of land.</p>
          </div>

        </div>
      </div>
    </section>


    <section class='bg-white py-16'>
      <div class='max-w-5xl mx-auto px-6'>
        <h2 class='text-3xl text-center font-bold text-gray-900 mb-4'>What Your Donation Supports</h2>
        <p class='text-gray-700 mb-12'>When you donate, you play a direct role in our critical, on-the-ground conservation and effective advocacy work. Here are just a few examples of the kind of important wins your support makes possible:</p>

        <!-- Item 1 -->
        <div class='flex flex-col md:flex-row items-start gap-6 mb-12'>
          <img src='img/mini forest.jpg' alt='Trees and river landscape' class='w-32 h-24 object-cover rounded'>
          <div>
            <h3 class='text-xl font-bold text-gray-900'>Planting Trees to Tackle Climate Change</h3>
            <p class='text-gray-700 mt-2'>
              In West Virginia alone, we’re planting more than 400,000 native trees that help capture carbon.
              It’s part of our larger goal here to protect at least 100,000 acres of Appalachian forests—twice the size of Acadia National Park—in the next few years.
            </p>
          </div>
        </div>

        <!-- Divider -->
        <hr class='border-gray-300 mb-12'>

        <!-- Item 2 -->
        <div class='flex flex-col md:flex-row items-start gap-6'>
          <img src='img/IMG20231018093112.jpg' alt='Bison' class='w-32 h-24 object-cover rounded'>
          <div>
            <h3 class='text-xl font-bold text-gray-900'>Conserving Wildlife</h3>
            <p class='text-gray-700 mt-2'>
              We expanded our 20 years of bison conservation, spanning 12 TNC preserves across North America, into a new bison program at Great Sand Dunes National Park through a partnership with the National Park Service.
            </p>
          </div>
        </div>
      </div>
    </section>


    ";


	$page->setTitle('Donate');
	$page->setContent($content);	
	print $page->getHtml();
?> 