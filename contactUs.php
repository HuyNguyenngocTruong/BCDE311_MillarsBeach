<?php
	include_once 'siteFunctions/commonFunctions.php';
	include_once 'siteFunctions/masterPage.php';
	require_once 'framework/htmlTemplate.php';
    $page = new MasterPage();
    
    $content = "
      <div class='flex flex-col items-center mt-4'>
          <!-- Centered Contact Us Section -->
          <h1 class='text-3xl md:text-4xl mt-[12px] leading-none tracking-tight text-[#228B22]'>Contact Us</h1>
          <div class='w-[80%] md:w-[45%] lg:w-[35%] text-left'>
              <p class='text-left md:text-center mt-5'>
                  If you have any questions or comments, please don't hesitate to get in touch using the form below.
              </p>
          </div>
          
          <!-- Contact Form -->
          <form class='w-[80%] md:w-[45%] lg:w-[35%] mt-8' action='#' method='POST'>
              <!-- First Name -->
              <div class='mb-4'>
                  <label for='first-name' class='block text-sm font-semibold text-gray-700'>First Name *</label>
                  <input type='text' id='first-name' name='first_name' required class='w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#228B22]' placeholder='Your First Name'>
              </div>

              <!-- Surname -->
              <div class='mb-4'>
                  <label for='surname' class='block text-sm font-semibold text-gray-700'>Surname</label>
                  <input type='text' id='surname' name='surname' class='w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#228B22]' placeholder='Your Surname'>
              </div>

              <!-- Email -->
              <div class='mb-4'>
                  <label for='email' class='block text-sm font-semibold text-gray-700'>Email Address *</label>
                  <input type='email' id='email' name='email' required class='w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#228B22]' placeholder='Your Email Address'>
              </div>

              <!-- Message -->
              <div class='mb-4'>
                  <label for='message' class='block text-sm font-semibold text-gray-700'>Message *</label>
                  <textarea id='message' name='message' required rows='4' class='w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#228B22]' placeholder='Your Message'></textarea>
              </div>

              <!-- How did you hear about us -->
              <div class='mb-4'>
                  <label for='source' class='block text-sm font-semibold text-gray-700'>How did you hear about us?</label>
                  <select id='source' name='source' class='w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#228B22]'>
                      <option value='google'>Google</option>
                      <option value='social_media'>Social Media</option>
                      <option value='friend'>Friend/Colleague</option>
                      <option value='other'>Other</option>
                  </select>
              </div>

              <!-- Submit Button -->
              <div class='flex justify-center'>
                  <button type='submit' class='px-6 py-2 mt-4 bg-[#228B22] text-white font-semibold rounded-md shadow-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-[#1e7e1e]'>
                      Send Message
                  </button>
              </div>

              <div class='w-[100%] mx-auto flex flex-col md:flex-row items-start justify-between gap-10 mt-10 mb-3'>
                  <div id='map' class='w-full h-[400px] flex justify-center md:justify-end'></div>
              </div>
          </form>

          <!-- Form -->
          <div class='flex min-h-full flex-col justify-center px-6 py-6 lg:px-8'>
              <div class='sm:mx-auto sm:w-full sm:max-w-sm'>
                  <h2 class='mt-4 text-center text-2xl/9 tracking-tight text-[#228B22]'>SUBSCRIBE</h2>
                  <p class='text-center mt-2'>Sign up with your email address to receive news</p>
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
      </div>


    ";

    $page->setTitle('About Us');
	$page->setContent($content);	
	print $page->getHtml();
?> 