<?php 
/******************************************************************************
 * 20160408 Murphy WONG
 * Rewrite application
 ******************************************************************************/

require_once('config.php');
require_once('include/my_include.php');

if($_COOKIE['DiastemasUserType']=="") {
    header("location: index.php");
} else {
	// all functions from common.php
	print_profile_header();
	print_profile_menu_bar($_COOKIE['DiastemasUserType']);
	echo "<div class=content>\n"; // For content
	print_profile_top_bar($_COOKIE['DiastemasUserType']);
	print_lounge();
	echo "</div>\n"; // For content
	print_profile_footer();
}

?>		
