<div id="form-thread">
	<h2>Messaggi dal Forum</h2>
	<small><strong><em>Nota Bene:</em></strong> questi messaggi non fanno parte di wpAndMore ma provengono dal <a href="http://www.giorgiotave.it/forum/" title="forum GT per Webmaster">Forum GT</a> dove Andrea Barghigiani &egrave; attualmente moderatore della sezione WordPress.</small>
	<!-- indirizzo da prendere le fonti: http://www.giorgiotave.it/forum/external.php?type=RSS2&forumids=86 -->
	<?php
		include_once(ABSPATH . WPINC . '/feed.php');
							
		$url = "http://www.giorgiotave.it/forum/external.php?type=RSS2&forumids=86";
		$feed = fetch_feed( $url );
		$maxitems = $feed->get_item_quantity( 3 );
		//Costruisco un array con tutti gli oggetti
		$feed_items = $feed->get_items( 0, $maxitems );
							
		foreach( $feed_items as $item ):
			$nome_autore = $item->get_author()->get_name();
			$titolo_topic = $item->get_title();
			$testo_topic = $item->get_description();
			$data_pubb = $item->get_date();
			$permalink = $item->get_permalink();
								
	?>
	<div class="forum-thread">
		<header>
			<h2><a href="<?php echo $permalink; ?>" title="Rispondi a <?php echo $nome_autore; ?>"><?php echo $titolo_topic; ?></a></h2>
			<small><strong><?php echo $nome_autore; ?></strong> scrive:</small>
		</header>
		<section>
			<p><?php echo esc_html( $testo_topic ); ?></p>	
		</section>
		<footer>
			<a class="more-link" href="<?php echo $permalink; ?>" title="Rispondi a <?php echo $nome_autore; ?>"><?php _e( 'Rispondi', 'wpam' );?></a>
		</footer>
								
	</div>
	<?php endforeach; ?>
						
</div>
