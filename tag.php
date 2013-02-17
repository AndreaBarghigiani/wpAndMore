<?php get_header( ); ?>

<div id="content">
			
	<div id="inner-content" class="wrap clearfix">
			
			<div id="main" role="main">
				<h1 class="archive-title h2">
					<span><?php _e('Articoli con Tag:', "bonestheme"); ?></span> <?php single_cat_title(); ?>
				</h1>
			<?php
				/* Qua devo aprire il loop che mostrera' la lista degli articoli */
				$temp = $wp_query;
				$wp_query = null;
				$wp_query = new WP_Query();
				$wp_query->query('showposts=6'.'&paged='.$paged);
				while ($wp_query->have_posts()) : $wp_query->the_post();
			?>
			
				<?php get_template_part( 'content', get_post_format() ); ?>
			
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
	    </div> <!-- end #main -->
    
	    <?php get_sidebar( 'front' ); ?>
				    
	</div> <!-- end #inner-content -->
   
</div> <!-- end #content -->

<?php get_footer(); ?>