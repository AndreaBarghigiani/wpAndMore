<?php get_header( ); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				   <div id="main" class="eightcol first clearfix" role="main">
						
						<h1>Categoria AndMore</h1>
						
						<section id="intro" class="post">
							<p>Benvenuto all'interno della categoria che eradita il nome da questo sito, <strong>AndMore</strong>.</p>
							<p>Attenzione, questa non &egrave; una categoria per deboli di cuore! I contenuti che troverai al suo interno sono stati selezionati e sviluppati per permetterti di acquisire delle conoscenze approfondite di WordPress.<br />
								Se hai gi&aacute; sviluppato con questa piattaforma sarai contento di trovare articoli che ti spiegano la realizzazione di Loop Personalizzati, utilizzare al meglio i WordPress Hook, comprendere la Struttura dei File di un tema e molti altri argomenti che dovremmo ancora coprire. 
							</p>
							<p>Se, invece, leggere Loop ti ha fatto <em>sgranare gli occhi</em>, ti consiglio di iniziare a leggere dei contenuti pi&ugrave; semplici come, ad esempio, la Guida per Creare un Template.</p>
							
							<?php get_template_part( 'modulo', 'newsletter' ); ?>
						</section>
						
						<h2>Articoli</h2>
						<div id="articoli-scritti">
						   	<?php
						   	
								/* Qua devo aprire il loop che mostrera' la lista degli articoli */
								$temp = $wp_query;
								$wp_query = null;
								$wp_query = new WP_Query( $args );
								 
								/* 
								 * Questa query particolare mi serve per escludere tutti
								 * i post in formato video, in questo modo non mi sballano il layout
								 */
								$args = array(
									'showposts' => 4,
									'paged' => $paged,
									'cat' => 42,
									'tax_query' => array(
										array(
											'taxonomy' => 'post_format',
											'field' => 'slug',
											'terms' => 'post-format-video',
											'operator' => 'NOT IN'
										)
									)
								);
								
								$wp_query->query( $args );
								while ($wp_query->have_posts()){
									
									$wp_query->the_post();
									
									get_template_part( 'content', 'posts' );
								} 
							?>
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
							<?php } 	
							wp_reset_query();
							$wp_query = null; $wp_query = $temp;
						?>
			    </div> <!-- end #main -->
    
				    <?php get_sidebar( ); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
