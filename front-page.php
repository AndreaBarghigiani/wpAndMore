<?php get_header( ); ?>

<div id="content">
			
	<div id="inner-content" class="wrap clearfix">
			<section class="blue-bar">
				<div id="inner-blue">
					<div id="matite">
						<div id="inner-matite">
							<div id="copre"></div>
							
							<?php
								/* Prendo gli ID delle tre categorie principali */
								$useID = get_cat_ID( 'usa' );
								$devID = get_cat_ID( 'dev' );
								
								
								/* Prendo i link delle tre categorie principali */
								$useLink = get_category_link( $useID );
								$devLink = get_category_link( $devID );
								$helpLink = get_page_link( 1963 ); //Qui ci devo inserire il link alla Pagina Help
							?>
							<nav id="gruppo-matite">
								<ul>
									<li id="use"><a href="<?php echo esc_url( $useLink ); ?>" title="Impara ad Usare WordPress">Impara ad Usare WordPress</a></li>
									<li id="dev"><a href="<?php echo esc_url( $devLink ); ?>" title="Impara ad Sviluppare WordPress">Impara ad Sviluppare WordPress</a></li>
									<li id="help"><a href="<?php echo esc_url( $helpLink ); ?>" title="Trova Aiuto per WordPress">Trova Aiuto per WordPress</a></li>
								</ul>
							</nav>
						</div>						
					</div>
			
					<div id="newsletter">
					 	<h2 class="solo480">Quale colore<br />ti dona?</h2>
					 	<div class="no480">
					 		
								 	<p>
								 		<strong>Usando le Matite</strong> sarai in grado di scegliere il tuo percorso preferito.
								 		Ogni sezione &egrave; stata creata per permetterti di facilitare l'apprendimento di questa piattaforma che, ad oggi, &egrave; in grado di dare vita a pi&ugrave; di 
								 		<strong>70 milioni di siti web</strong>. 
								 	</p>
								 	<h2 class="solo768">Iscriviti alla Newsletter</h2>
									<p class="no768">Se non vuoi perderti la possibilit&aacute; di ricevere degli aggiornamenti ricchi di spunti e suggerimenti, iscriviti alla newsletter.</p>
									
									<?php get_template_part( 'modulo', 'newsletter' ); ?>
					 	</div>
			 		</div><!-- fine #newsletter -->
			 		
				</div><!-- fine #inner-blue -->
			</section>	
			
			<div id="main" role="main">
				<h2>Ultime dal Blog</h2>
			
			<?php
				/* Qua devo aprire il loop che mostrera' la lista degli articoli */
				$temp = $wp_query;
				$wp_query = null;
				$wp_query = new WP_Query();
				$wp_query->query('showposts=3'.'&paged='.$paged);
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