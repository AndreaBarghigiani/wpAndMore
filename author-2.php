<?php get_header( ); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				   <div id="main" class="clearfix" role="main">
						
						<?php
							/* Qua devo aprire il loop che mostrera' la descrizione dell'autore */
							$autore = get_the_author_meta('ID');
							$loop = new WP_Query( 'page_id=1993' );
							if ($loop->have_posts()) : $loop->the_post();  
							
								get_template_part( 'content', 'author' ); 
							
							endif; wp_reset_query();?>
						<h2>Articoli Scritti</h2>
						<div id="articoli-scritti">
	
							<?php
								/* Adesso è giunto il momento di mostrare gli articoli che scrivo */
								
								$loop = new WP_Query( "author=$autore" );
								while ( $loop->have_posts() ) : $loop->the_post();  
									
									get_template_part( 'content', 'posts' );
									
								endwhile;
								wp_reset_query();
							?>
						</div>
				      	<?php 
				      		if (function_exists('bones_page_navi')) {
				      			bones_page_navi(); 
					      } else { ?>
					         <nav class="wp-prev-next">
					             <ul class="clearfix">
					        		 	<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
					        	      <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
					             </ul>
					         </nav>
					     <?php }  ?>		
			
				    </div> <!-- end #main -->
    
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
