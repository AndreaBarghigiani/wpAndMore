	<article <?php post_class( "single-article" ); ?>>
		<section class="article-content">
			<div class="media">
 				<?php 
 					//Inserisco box media
 					$video = get_post_meta( $post->ID, '_am_video', true );
					//if( $video != '' ) echo '<div class="video icon">video</div>';
 					
   					$audio = get_post_meta( $post->ID, '_am_audio', true );
					if( $audio != '' ) echo '<div class="audio icon">audio</div>';
					
					$presentazione = get_post_meta( $post->ID, '_am_presentazione', true );
					if( $presentazione != '' ) echo '<div class="presentazione icon">leggi</div>';
					$demo = get_post_meta( $post->ID, '_am_demo', true );
					//if( $demo != '' ) echo '<div class="down icon">down</div>';
				?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php
						if( $video != '' ) echo '<div class="video icon">video</div>';
						if( $demo != '' ) echo '<div class="down icon">down</div>';
					?>
					<?php the_post_thumbnail( 'wpam-thumb' ); ?>
				</a>
			</div>
			
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<?php
	   			$primo = get_post_meta( $post->ID, '_am_primo_par', true);
				if( $primo ){ echo "<div class=\"primo\">$primo</div>"; }
				/* Contenuto */
				the_content(); 
			?>
		</section>	
	</article>