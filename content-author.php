	<article <?php post_class( ); ?> itemscope itemtype="http://schema.org/Person">
		<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Descrizione di <span itemprop="name"><?php the_title(); ?></span></a></h1>
		<section id="intro" class="article-content post" itemprop="description">
			<?php 
				echo get_avatar( 2, 128 ); 
		   ?>
			<?php
				/* Contenuto */
				the_content(); 
			?>
		</section>	
	</article>