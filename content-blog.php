<?php
	/* Qua devo aprire il loop che mostrera' la lista degli articoli */
	$temp = $wp_query;
	$wp_query = null;
	$wp_query = new WP_Query();
	$wp_query->query('showposts=5'.'&paged='.$paged);
	while ($wp_query->have_posts()) : $wp_query->the_post();
?>
	<article <?php post_class( "single-article" ); ?>>
		<section class="article-content">
			<div class="media">
 				<?php 
 					//Inserisco box media
 					$video = get_post_meta( $post->ID, '_am_video', true );
					if( $video != '' ) echo '<div class="video icon">video</div>';
 					
   					$audio = get_post_meta( $post->ID, '_am_audio', true );
					if( $audio != '' ) echo '<div class="audio icon">audio</div>';
					
					$presentazione = get_post_meta( $post->ID, '_am_presentazione', true );
					if( $presentazione != '' ) echo '<div class="presentazione icon">leggi</div>';
					$demo = get_post_meta( $post->ID, '_am_demo', true );
					if( $demo != '' ) echo '<div class="down icon">down</div>';
				?>
				<a id="thumb-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'wpam-thumb' ); ?></a>
			</div>
			
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<?php	   			
				/* Contenuto */
				the_excerpt(); 
			?>
		</section>	
	</article>
				
<?php
	endwhile;
	
	if (function_exists('bones_page_navi')) { ?>
		<?php bones_page_navi(); ?>
	<?php } else { ?>
		<nav class="wp-prev-next">
			<ul class="clearfix">
				<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
				<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
			</ul>
		</nav>
	<?php } 	
	wp_reset_query();
	$wp_query = null; $wp_query = $temp;
?>