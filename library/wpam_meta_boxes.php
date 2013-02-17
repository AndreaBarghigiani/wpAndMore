<?php
/*
 *	Meta Boxes per ANDMORE
 * 
 * Tutte le meta box qui presenti dovranno aprire un lightbox premendo il pulsante, questo viene
 * fatto per velocizzare il caricamento delle pagine singole.
 * 
 * media - in grado di accettare iframe per embed di video, audio e presentazioni dai vari network
 * 
*/



/* Video Meta Box */

add_action( 'add_meta_boxes', 'am_media_box' );
add_action( 'save_post', 'am_salva_media_box' );
function am_media_box(){
	
	//Creo la meta box
	add_meta_box( 'am_media_box', 'File Media Collegati all\'articolo', 'am_mostra_media_box', 'post', 'side', 'high' );

}

function am_mostra_media_box( $post ){
	
	//Controllo se ci sono valori preimpostati
	$am_video = get_post_meta( $post->ID, '_am_video', true );
	$am_audio = get_post_meta( $post->ID, '_am_audio', true );
	$am_presentazione = get_post_meta( $post->ID, '_am_presentazione', true );
	$am_demo = get_post_meta( $post->ID, '_am_demo', true );
	
	//Costrisco la form
	
	echo "<p>Se presente inserisci il media per questo articolo.</p>";
?>
<div id="am_video">
	<h4>Video</h4>
	<p>Pillola: 625x352</p>
	<textarea name="am_video"><?php echo $am_video; ?></textarea>
</div>
<div id="am_audio">
	<h4>Audio</h4>
	<textarea name="am_audio"><?php echo $am_audio; ?></textarea>
</div>
<div id="am_presentazione">
	<h4>Presenzazione</h4>
	<textarea name="am_presentazione"><?php echo $am_presentazione; ?></textarea>
</div>
<div id="am_demo">
	<h4>Download</h4>
	<textarea name="am_demo"><?php echo $am_demo; ?></textarea>
</div>

<?php
} //fine am_mostra_meta_box()

function am_salva_media_box( $post_id ){
	
	//Controllo che venga passato almeno un nuovo valore
	if( isset( $_POST['am_video'] ) || isset( $_POST['am_audio'] ) || isset( $_POST['am_presentazione'] ) || isset( $_POST['am_demo']) ){
		
		//salvo i valori
		update_post_meta( $post_id, '_am_video', $_POST['am_video'] );
		update_post_meta( $post_id, '_am_audio', $_POST['am_audio'] );
		update_post_meta( $post_id, '_am_presentazione', $_POST['am_presentazione'] );
		update_post_meta( $post_id, '_am_demo', $_POST['am_demo'] );
	}
} //fine am_salva_meta_box()



/*
 * Aggiungo Meta Box per Primo Paragrafo
 */
add_action('add_meta_boxes', 'am_primo_paragrafo');
function am_primo_paragrafo(){
	add_meta_box('am_primo_par', 'Inserisci Paragrafo', 'am_show_primo_paragrafo', 'post', 'normal', 'high' );
	add_meta_box('ampag_primo_par', 'Inserisci Paragrafo', 'am_show_primo_paragrafo', 'page', 'normal', 'high' );
}
function am_show_primo_paragrafo( $post ){
	$am_primo_value = get_post_meta( $post->ID, '_am_primo_par', true);

         			$settings = array(
         					'textarea_name' => 'am_primo_par',
         					'wpautop' => true,
						   'media_buttons' => false,
						   'tinymce' => array(
						        'theme_advanced_buttons1' => 'bold,italic,underline,blockquote,|,undo,redo,|,fullscreen,link',
						        'theme_advanced_buttons2' => '',
						        'theme_advanced_buttons3' => '',
						        'theme_advanced_buttons4' => ''
						   ),
						   'quicktags' => array(
						        'buttons' => 'b,i,ul,ol,li,link,close'
						   )
						);
					
					wp_editor("<p>$am_primo_value</p>", 'inserisciPrimoParagrafo', $settings );

}
//post
add_action('save_post', 'am_primo_paragrafo_save');
function am_primo_paragrafo_save( $post_id ){
	if( isset( $_POST['am_primo_par'] ) ){
		update_post_meta( $post_id, '_am_primo_par', $_POST['am_primo_par'] );
	}
}
//pagina
add_action('save_post', 'ampag_primo_paragrafo_save');
function ampag_primo_paragrafo_save( $post_id ){
	if( isset( $_POST['am_primo_par'] ) ){
		update_post_meta( $post_id, '_am_primo_par', $_POST['am_primo_par'] );
	}
}