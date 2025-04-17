<?php
	include_once 'siteFunctions/commonFunctions.php';
	include_once 'siteFunctions/masterPage.php';
	require_once 'framework/htmlTemplate.php';

	$page = new MasterPage();

	// Gallery HTML content
	$content = "
         <!-- Playable Box -->
        <div onclick='playAudio()' class='cursor-pointer flex items-center justify-center gap-3 mx-auto mt-4 mb-4 p-4 border border-green-600 rounded-md bg-green-100 text-green-800 w-fit hover:bg-green-200 shadow-md'>
            <i class='fas fa-play text-2xl'></i>
            <span class='text-base font-medium'>Click here to play the music</span>
        </div>
        
        <!-- Hidden Audio -->
        <audio id='bgMusic'>
            <source src='audio/your-audio-file.mp3' type='audio/mpeg'>
        </audio>

        <div class='grid grid-cols-2 md:grid-cols-4 gap-4'>
        <div class='grid gap-4'>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg' alt=''>
            </div>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg' alt=''>
            </div>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg' alt=''>
            </div>
        </div>
        <div class='grid gap-4'>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg' alt=''>
            </div>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg' alt=''>
            </div>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg' alt=''>
            </div>
        </div>
        <div class='grid gap-4'>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg' alt=''>
            </div>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg' alt=''>
            </div>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg' alt=''>
            </div>
        </div>
        <div class='grid gap-4'>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg' alt=''>
            </div>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg' alt=''>
            </div>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg' alt=''>
            </div>
        </div>
    </div>
    ";

	$page->setTitle('Gallery');
	$page->setContent($content);	
	print $page->getHtml();
?>
