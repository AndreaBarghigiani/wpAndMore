<?php
/*
Template Name: Newsletter
*/
?>

<?php get_header( 'newsletter' ); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
						<section class="blue-bar">
							<div id="inner-blue">
								<div id="video" class="no768">
									<iframe width="511" height="287" src="http://www.youtube.com/embed/62Mjbs9jXfU" frameborder="0" allowfullscreen></iframe>
								</div>
								<div id="newsletter">
								 	<h2>Iscriviti alla Newsletter</h2>
								 	<p>Se stai cercando articoli e corsi per la piattaforma WordPress, ti consiglio di far visita al <a href="http://wordpressandmore.info" title="WordPress AndMore - Apprendi WordPress Facilmente">nostro sito gemello</a> perch&Egrave;, al momento, wpAndMore non &egrave; ancora pronto.</p>
									<p>wpAndMore è al momento in fase di costruzione e il nostro <a href="http://andreabarghigiani.info" title="Andrea Barghigiani present BluePrint">Andrea Barghigiani</a> sta facendo del suo meglio per svilupparlo il prima possibile.</p>
									<p>Guarda il video o accedi alla newsletter per ricevere tutti gli aggiornamenti, e qualche extra, direttamente all’interno della tua casella di posta.</p>
									<?php get_template_part( 'modulo', 'newsletter' ); ?>
						 		</div>
					 		</div>
					 	</section>	
				    <div id="main" class="first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix page-newsletter'); ?> role="article">
										
						    <section class="entry-content">
							    <?php the_content(); ?>
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">
							    <p class="clearfix"><?php the_tags('<span class="tags">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p>
							
						    </footer> <!-- end article footer -->
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					
					    <?php else : ?>
					
        					<article id="post-not-found" class="hentry clearfix">
        					    <header class="article-header">
        						    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
        						</header>
        					    <section class="entry-content">
        						    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        						</section>
        						<footer class="article-footer">
        						    <p><?php _e("This is the error message in the page-custom.php template.", "bonestheme"); ?></p>
        						</footer>
        					</article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    
				    <?php get_sidebar( 'newsletter' ); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer( 'newsletter' ); ?>
