<?php
	include_once 'siteFunctions/commonFunctions.php';
	include_once 'siteFunctions/masterPage.php';
	require_once 'framework/htmlTemplate.php';

	$page = new MasterPage();

	// Gallery HTML content
	$content = "
         <!-- Playable Box -->
         <audio id='natureAudio' id='audioBox' src='audio/Tui kaka.wav'></audio>
        <div onclick='playAudio()' class='cursor-pointer flex items-center justify-center gap-3 mx-auto mt-4 mb-4 p-4 border border-green-600 rounded-md bg-green-100 text-green-800 w-fit hover:bg-green-200 shadow-md'>
            <i id='audioIcon' class='fas fa-play text-2xl'></i>
            <span id='audioText' class='text-base font-medium'>Click here to play Tui Kaka chirping</span>
        </div>
        
        <!-- Hidden Audio -->
        <audio id='bgMusic'>
            <source src='audio/your-audio-file.mp3' type='audio/mpeg'>
        </audio>

        <div class='grid grid-cols-2 md:grid-cols-4 gap-4'>
        <div class='grid gap-4'>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='img/Prices point rocks.jpg' alt=''>
            </div>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='img/Millars hill view Pip.jpg' alt=''>
            </div>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='img/IMG_whalers.jpeg' alt=''>
            </div>
        </div>
        <div class='grid gap-4'>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='img/mini forest.jpg' alt=''>
            </div>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='img/IMG_sunrise.jpeg' alt=''>
            </div>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='img/IMG_boardwalk.jpeg' alt=''>
            </div>
        </div>
        <div class='grid gap-4'>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='img/IMG_1619.HEIC' alt=''>
            </div>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='img/IMG_Bush.jpg' alt=''>
            </div>
            <div>
                <img class='h-auto max-w-full rounded-lg' src='img/Millars shelter pip.jpg' alt=''>
            </div>
        </div>
        <div class='grid gap-4'>
            <div>
                <img class='h-full max-w-full rounded-lg' src='img/Kiwi_prints.png' alt=''>
            </div>
            <div>
                <img class='h-full max-w-full rounded-lg' src='img/DJI_0061.JPG' alt=''>
            </div>
            <div>
                <img class='h-full max-w-full rounded-lg' src='img/IMG20231018095029.jpg' alt=''>
            </div>
        </div>
    </div>
    ";

	$page->setTitle('Gallery');
	$page->setContent($content);	
	print $page->getHtml();
?>
