<?php
/* Welcome to Bones :)
Thanks to the fantastic work by Bones users, we've now
the ability to translate Bones into different languages.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/



// Adding Translation Option
function wpam_add_localization(){
	load_theme_textdomain( 'bonestheme', get_template_directory() .'/library/translation' );
	$locale = get_locale();
	$locale_file = get_template_directory() ."/library/translation/".$locale.".po";
	require_once($locale_file);
}

add_action( 'after_setup_theme', 'wpam_add_localization');
	







?>