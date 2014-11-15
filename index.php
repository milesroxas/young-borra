<?php
	//Siren Framework v3.0
	//File Name: Sample Page
	//File Purpose: To show developer class and element structure
	//File Notes: Just an example

	//Page Data Variables
	$pagename = 'index';

    $meta_title = 'Homepage';
    $meta_desc = "Welcome to the site";
    $meta_keywords = "stuff";


	//Header
	require_once('includes/header.php'); 
?>


<div class="mike_img">
	<img src="images/mike.png" alt="Michael Curley"/>
</div>

<div class="jonas_img">
	<img src="images/jonas.png" alt="Jonas Young-Borra"/>
</div>



<?php require_once('includes/footer.php'); ?>