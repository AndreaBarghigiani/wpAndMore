<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="wrap clearfix">
					
					<div id="main" class="first clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix single-article'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
								<header class="article-header">
									<a id="thumb-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'wpam-thumb' ); ?></a>
									<h1 class="entry-title single-title" itemprop="headline">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_title(); ?>
										</a>
									</h1>
                  
			                  <p class="byline vcard">
			                  		<span class="author">Autore: <strong><?php echo bones_get_the_author_posts_link(); ?></strong></span>
			                  		<span class="category">Categoria: <strong><em><?php echo get_the_category_list( ', ' ); ?></em></strong></span>
			                  		<span class="data">Data: <strong><em><time class="updated" datetime="<?php echo get_the_time('Y-m-j'); ?>"><?php echo get_the_time('j-m-Y'); ?></time></em></strong></span>
			                  </p>
									
									<?php
										$corso = false;
										$video = get_post_meta( $post->ID, '_am_video', true );
										$demo = get_post_meta( $post->ID, '_am_demo', true );
   										if( $video != '' || $audio != '' || $presentazione != '' || $demo != '' ){
   									?>
   									<div id="post-media" class="no480">
   										<div>
   											<p>Extra:</p>
   										</div>
   										<?php if( $video ) : ?> 
   											<div class="link-video">
   												<a href="#video" title="Guarda il video per <?php the_title(); ?>">
   													<?php _e( 'Video', 'am_theme' ); ?>
   												</a>	
   											</div>
   										<?php endif; if( $demo ) : ?>
   											<div class="link-down no768">
   												<a target="_blank" href="<?php echo $demo; ?>" title="Scarica l'esempio per <?php the_title(); ?>">
   													<?php _e( 'Down', 'am_theme' ); ?>
   												</a>	
   											</div>
   										<?php endif;
												 
   											if( in_series() ) {
   												$corso = true;
   										?>
   											<div class="link-corso">
   												<a href="#lista" title="Guarda tutte le lezioni">
   													<?php _e( 'Corso', 'am_theme' ); ?>
   												</a>	
   											</div>
   											<?php } ?>
   										
   										
									</div>
									<?php } ?>
									<?php if( $video ) : ?>
		   								<div id="video" class="player">
		   									<?php echo $video; ?>
		   								</div>
	   								<?php endif; ?>
	   								<?php if( $corso ) : ?>
	   									<div id="lista-lezioni" class="no480">
	   										
	   										<?php
	   											$test = wp_postlist_display();
												$series = get_the_series();
												$serie_id = $series[0]->term_id ;
												$serie_name = the_series_title( $serie_id );
												$lista_lezioni = get_series_posts( $serie_id );
											?>
											<h5><?php echo $serie_name; ?></h5>
											<h6><?php _e( 'Lezioni:', 'wpandmore'); ?></h6>
											<ol>
												<?php echo $lista_lezioni; ?>
											</ol>	
	   									</div>
	   								<?php endif; ?>
								</header> <!-- end article header -->
								
								<section class="article-content clearfix" itemprop="articleBody">
									
									<?php
							   			$primo = get_post_meta( $post->ID, '_am_primo_par', true);
										if( $primo ){ echo "<div class=\"primo\">$primo</div>"; }
										/* Contenuto */
										remove_filter( 'the_content', 'sharing_display', 19 ); 
										remove_filter( 'the_excerpt', 'sharing_display', 19 );
										the_content(); 
										the_tags('<p class="tags"><span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', '</p>'); 
									?>
									
								</section> <!-- end article section -->
						
								<footer class="article-footer">
									
									<div id="social-and-news">
										<?php echo sharing_display(); ?>
										<h3>Iscriviti per non perderne altri.</h3>
										<div id="article-news">
											<?php get_template_part( 'modulo', 'newsletter' ); ?>
										</div>
									</div>
								
								</footer> <!-- end article footer -->
					
							</article> <!-- end article -->
							
							<section id="commenti">
								<?php comments_template(); ?>
							</section>
					
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
					    		    <p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
					    		</footer>
							</article>
					
						<?php endif; ?>
			
					</div> <!-- end #main -->
    
					<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
