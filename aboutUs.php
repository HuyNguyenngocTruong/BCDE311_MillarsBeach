<?php
	include_once 'siteFunctions/commonFunctions.php';
	include_once 'siteFunctions/masterPage.php';
	require_once 'framework/htmlTemplate.php';
    $page = new MasterPage();
    
    $content = '
    <div class="flex flex-col items-center">
      <div class="w-[80%] md:w-[45%] lg:w-[35%] text-left mt-5">
    
        <!-- Our Story -->
        <section>
          <h2 class="text-2xl md:text-3xl leading-none tracking-tight text-[#228B22] text-center mb-4">Our Story</h2>
          <ul class="mt-2 list-disc pl-5">
            <li class="mb-2">
              <strong>Overview:</strong> Explain what the initiative is about – our mission, history, and goals.
            </li>
            <li class="mb-2">
              <strong>Why It’s Important:</strong> Discuss the importance of suppressing predators (like rats, cats, and possums) for preserving native wildlife, biodiversity, and the overall ecosystem of Rakiura.
            </li>
            <li>
              <strong>The Process: Tech and Innovation:</strong> Highlight any innovative technologies or methods being used (e.g., AT550’s, GPS tracking, camera monitoring, or new trapping systems).
            </li>
          </ul>
        </section>
    
        <!-- Our Mission -->
        <section class="w-full px-4 py-12 bg-white">
          <div class="max-w-6xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-12">
            <div class="lg:w-1/2 text-center lg:text-left">
              <h2 class="text-2xl md:text-3xl text-[#228B22] text-center mb-4">Our Mission</h2>
              <div class="w-14 h-1 bg-green-600 mx-auto lg:mx-0 mb-4"></div>
              <p>
                To conserve the lands and waters on which all life depends.
              </p>
            </div>
            <div class="lg:w-1/2">
              <img src="img/Mission.jpg" alt="Mission Illustration" class="w-full max-w-md mx-auto">
            </div>
          </div>
        </section>
    
        <!-- Our Vision -->
        <section class="w-full px-4 py-12 bg-white">
          <div class="max-w-6xl mx-auto flex flex-col-reverse lg:flex-row items-center justify-between gap-12">
            <div class="lg:w-1/2">
              <img src="img/Vison.jpg" alt="Vision Illustration" class="w-full max-w-md mx-auto">
            </div>
            <div class="lg:w-1/2 text-center lg:text-left">
              <h2 class="text-2xl md:text-3xl text-[#228B22] text-center mb-4">Our Vision</h2>
              <div class="w-14 h-1 bg-green-600 mx-auto lg:mx-0 mb-4"></div>
              <p>
                A world where the diversity of life thrives, and people act to conserve nature for its own sake and its ability to fulfill our needs and enrich our lives.
              </p>
              <a href="#priorities" class="text-green-700 font-semibold underline">See Our Priorities</a>
            </div>
          </div>
        </section>
    
        <!-- Our Location -->
        <section class="mt-8">
          <h2 class="text-2xl md:text-3xl leading-none tracking-tight text-[#228B22] text-center mb-4">Our Location</h2>
          <div id="map" class="w-full h-[300px] mt-2 rounded-lg overflow-hidden shadow-md"></div>
        </section>
    
        <!-- Our Team -->
        <section class="mt-8">
          <h2 class="text-2xl md:text-3xl leading-none tracking-tight text-[#228B22] text-center mb-4">Our Team</h2>
          <img src="" alt="Image of all people in the teams" class="mt-2">
          <p class="mt-2 text-justify leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </section>
    
      </div>
    </div>
    ';
    
    


    $page->setTitle('About Us');
	$page->setContent($content);	
	print $page->getHtml();
?> 