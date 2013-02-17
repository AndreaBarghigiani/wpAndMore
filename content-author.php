	<article <?php post_class( ); ?>>
		<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Descrizione di <?php the_title(); ?></a></h1>
		<section id="intro" class="article-content post">
			<?php
				/* Contenuto */
				the_content(); 
			?>
		</section>	
	</article>