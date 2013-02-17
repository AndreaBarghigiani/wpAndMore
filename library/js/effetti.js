jQuery(document).ready(function($){
	/* _Effetto Corso_
	 * Dentro questo blocco inserisco le funzioni per mostrare/nascondere
	 * la lista delle lezioni appartenenti ad un corso
	 */	
	$( '#post-media .link-corso a' ).toggle( function( e ){
		e.preventDefault();
		$( '#lista-lezioni').slideDown(1500);
	},function( e ){
		e.preventDefault();
		$( '#lista-lezioni').slideUp(1500);
	});
	
	$( '#post-media .link-video a' ).toggle( function( e ){
		e.preventDefault();
		$( '#video').slideDown(1500);
	},function( e ){
		e.preventDefault();
		$( '#video').slideUp(1500);
	})
	/* Fine Effetto Corso */
	
});
