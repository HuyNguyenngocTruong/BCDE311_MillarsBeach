<?php
	include_once 'siteFunctions/commonFunctions.php';
	include_once 'siteFunctions/masterPage.php';
	require_once 'framework/htmlTemplate.php';
    $page = new MasterPage();
    

$content = "

<!-- Carousel Section -->
<section class='w-[90%] mx-auto mt-10'>
  <div class='relative mx-auto overflow-hidden rounded-xl w-full max-w-3xl'>
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
</section>

<!-- About Section -->
<section class='w-[80%] items-center mx-auto mt-10'>
  <h1 class='mb-4 mt-6 ml-2 text-2xl text-[#228B22] md:text-3xl lg:text-4xl text-center'>
    Welcome to Millars Beach Island
  </h1>

  <!--Map and Text-->
  <div class='w-full mx-auto flex flex-col md:flex-row items-start justify-between gap-10 mt-10 mb-5'>
    <div class='flex flex-col md:flex-row justify-center items-center gap-10 w-full md:w-1/2'>
      <p class='ml-2 text-[#444444] text-base leading-relaxed text-left md:text-left text-justify'>
        The Millars Beach Restoration Project is all about giving our native wildlife a fighting chance by keeping pesky predators in check! We’re working hard to reduce the impact of invasive species and help our local birds, plants, and marine life thrive. By managing and suppressing predators, we’re creating a more balanced ecosystem where our wildlife can flourish. 
        With the support of our awesome community, and environmental partners this project is all about protecting Millars Beach and its natural, vibrant self—so we can all enjoy its unique beauty for years to come!
      </p>
    </div>

    <div id='map' class='w-full md:w-1/2 h-[400px] flex justify-center md:justify-end'></div>
  </div>
</section>

<!-- Signature Wildlife Section -->
<section class='mt-10'>
  <h1 class='mb-6 text-2xl text-[#228B22] md:text-3xl lg:text-4xl text-center'>
    Signature Wildlife of Millars Beach Island
  </h1>

  <div class='w-[90%] mx-auto grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3'>
    
    <!-- Wildlife Card -->
    <div class='border rounded-md shadow-sm overflow-hidden bg-white'>
      <img src='img/Example.jpeg' alt='Frogs' class='w-full h-48 object-cover' />
      <div class='p-4'>
        <h2 class='text-lg font-semibold text-gray-900'>Exploring Nature: Spring Frogs</h2>
        <p class='text-sm text-gray-600 mt-1'>
          Discover the vibrant world of frogs in Millars Beach wetlands through guided field art and observation.
        </p>
        <p class='mt-2 text-sm font-semibold text-gray-800'>By Millars Eco Group</p>
      </div>
    </div>

    <!-- Wildlife Card -->
    <div class='border rounded-md shadow-sm overflow-hidden bg-white'>
      <img src='img/Example.jpeg' alt='Wildflowers' class='w-full h-48 object-cover' />
      <div class='p-4'>
        <h2 class='text-lg font-semibold text-gray-900'>
          Bloom and Bust: Climate Effects on Wildflowers
        </h2>
        <p class='text-sm text-gray-600 mt-1'>
          Changing seasonal patterns are impacting bloom cycles at the beach’s dunes and meadows.
        </p>
        <p class='mt-2 text-sm font-semibold text-gray-800'>By Kirsten Weir</p>
      </div>
    </div>

    <!-- Wildlife Card -->
    <div class='border rounded-md shadow-sm overflow-hidden bg-white'>
      <img src='img/Example.jpeg' alt='Solace Flower' class='w-full h-48 object-cover' />
      <div class='p-4'>
        <h2 class='text-lg font-semibold text-gray-900'>
          Wildflower Watching as Solace
        </h2>
        <p class='text-sm text-gray-600 mt-1'>
          Taking time to observe the island’s native blooms offers peace and reflection in nature.
        </p>
        <p class='mt-2 text-sm font-semibold text-gray-800'>By Lisa Ballard</p>
      </div>
    </div>

  </div>
</section>




<!-- Nature Needs You Section -->
<section class='py-8 bg-white text-center'>
  <div class='max-w-5xl mx-auto px-6'>
    <h1 class='mb-4 mt-6 ml-2 text-2xl text-[#228B22] md:text-3xl lg:text-4xl text-center'>
      Nature Needs You
    </h1>

    <p class='ml-2 mb-6 text-[#444444] text-base leading-relaxed text-left md:text-left text-justify'>
      There are so many ways you can get involved and do your part to support a world where people and nature thrive together.
    </p>

    <div class='grid grid-cols-1 sm:grid-cols-2 gap-6'>
      <!-- Card 1 -->
      <a href='ContactUs.php' class='relative h-64 rounded overflow-hidden shadow-md group'>
        <img src='img/Example2.jpg' alt='Volunteer' class='w-full h-full object-cover group-hover:scale-105 transition-transform duration-300'>
        <div class='absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center'>
          <h3 class='text-white text-xl font-semibold'>Volunteer</h3>
        </div>
      </a>

      <!-- Card 2 -->
      <a href='ContactUs.php' class='relative h-64 rounded overflow-hidden shadow-md group'>
        <img src='img/Example2.jpg' alt='Donate to Our Mission' class='w-full h-full object-cover group-hover:scale-105 transition-transform duration-300'>
        <div class='absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center'>
          <h3 class='text-white text-xl font-semibold text-center px-2'>Donate to Our Mission</h3>
        </div>
      </a>
    </div>
  </div>
</section>

";



	$page->setTitle('Homepage');
	$page->setContent($content);	
	print $page->getHtml();
?> 