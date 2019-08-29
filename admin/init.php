<?php

include "includes/functions/kernel.php";



	$tpl = 'includes/template/';  // Template Directory
    $css = 'layout/css/';
    $js = 'layout/js/';
    $img = 'layout/images/';
	//$js = 'layout/js/'; //JS Directory



    // Include The Important Files
  
    include $tpl . 'header.php'; // For Header



// Include Navbar On All Pages Expect The One With $noNavBar Vairable

	if(!isset($noNavbar)){
	  include $tpl . 'navbar.php'; // For Navbar
	}
