<?php get_header( 'home' ); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				   <div id="main" class="eightcol first clearfix" role="main">
						
						<h1>Sviluppare WordPress</h1>
						
						<section id="intro" class="post">
							<p>Benvenuto all'interno della sezione <strong>Dev</strong> dove trovi corsi e articoli che ti permetteranno di migliorare le tue competenze di sviluppo WordPress.</p>
							<p>Non perderti neanche un articolo, iscriviti alla newsletter.</p>
							
							<?php get_template_part( 'modulo', 'newsletter' ); ?>
						</section>
						<div id="condividi"><?php echo sharing_display(); ?></div>
						<h2>Articoli</h2>
					  
					   	<div id="articoli-scritti">
						   	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						   		
						   		<?php get_template_part( 'content', get_post_format() ); ?>
						   		
						   	<?php endwhile; endif; ?>
						</div>
						<?php				
								if (function_exists('bones_page_navi')) { ?>
									<?php bones_page_navi(); ?>
								<?php } else { ?>
									<nav class="wp-prev-next">
										<ul class="clearfix">
											<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
											<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
										</ul>
									</nav>
						<?php } ?>
						
				    </div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
