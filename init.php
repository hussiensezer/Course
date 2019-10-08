<?php

include "includes/functions/kernel.php";



	$tpl = 'includes/template/';  // Template Directory
    $css = 'layout/css/';
    $js = 'layout/js/';
    $img = 'layout/images/';
	



    // Include The Important Files
  
    include $tpl . 'header.php'; // For Header



// Include Navbar On All Pages Expect The One With $noNavBar Vairable

	if(!isset($noNavbar)){
	  include $tpl . 'navbar.php'; // For Navbar
	}
