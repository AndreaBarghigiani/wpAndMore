<div class="single-video">
	<h2 class="post-format-video"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	
	<article <?php post_class( "single-article" ); ?>>
	 
		<section class="article-content">
			<?php
		   		$video = get_post_meta( $post->ID, '_am_video', true);
					
				if( $video ) :
			?>
				<div id="video" class="player">
					
						<?php echo $video; ?>	
					
				</div>
			<?php endif; ?>	
				
			<?php 	the_content(); 	?>
		</section>	
	 
	</article>
</div>