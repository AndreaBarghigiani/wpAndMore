<?php
/*
 *	SHORTCODE per ANDMORE
 * 
 * info = box contenuti per mostrare differente il contenuto [contenuto] 
 * 
*/

/*
 * Aggiungo un box informativo
 */

function am_box_info( $attr, $content = null ){
	extract( shortcode_atts( array( 'class' => 'box-info' ), $attr));
	
 	if( $content ){
 		$box = "<div class=" . $class . ">" . $content ."</div>";
 	}
	
	return $box;
 }
 
add_shortcode('info', 'am_box_info' );
