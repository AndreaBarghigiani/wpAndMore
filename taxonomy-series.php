<?php get_header( ); ?>

<div id="content">
	<div id="inner-content" class="wrap clearfix">
					
		<div id="main" class="first clearfix" role="main">
		 	
		 	<section id="intro" class="post">
		  		<h1><?php single_term_title() ?></h1>
			  	<?php echo term_description(); ?>
			  	
			  	<?php get_template_part( 'modulo', 'newsletter' ); ?>
		  	</section>
		  	<div id="social-share" class="post">
		  		<h2><?php _e( 'Condividi il tuo Apprezzamento' ); ?></h2>
		  		<p>Questa guida &egrave; e rester&aacute; <strong>gratuita</strong> e ti permetter&aacute; di approfondire le tue conoscenze <strong>WordPress</strong>. Se ritieni questo contenuto interessante, pensa ad aiutare i tuoi colleghi e amici condividento questa risorsa.<br /><br /><em><strong>PS</strong>: Cos&iacute; facendo aiuterai anche me a condividere i miei sforzi e per questo te ne sar&ograve; eternamente grato!</em></p>
		  		
		  		<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
					<a class="addthis_button_preferred_1"></a>
					<a class="addthis_button_preferred_2"></a>
					<a class="addthis_button_preferred_3"></a>
					<a class="addthis_button_preferred_4"></a>
					<a class="addthis_button_compact"></a>
					<a class="addthis_counter addthis_bubble_style"></a>
				</div>
				<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5130999649d60f53"></script>
				<!-- AddThis Button END -->
			</div>
  	
  <?php 
  		$args = array(
			'posts_per_page' => -1,
			'order' => 'ASC'
		);
  		//$loop = new WP_Query( $args );
  		if ( have_posts() ) : 
  ?>
	
  	<div id="borders">
  		
  	<?php while ( have_posts() ) : the_post(); ?>
  	
 	<?php get_template_part( 'content', 'series' ); ?>

  <?php endwhile; ?>
 	</div>
 <?php else : ?>

  <h2>Not Found</h2>
  <p>Try using the search form below</p>
  <?php get_search_form(); ?>

 <?php endif; ?>
		</div><!-- end #main -->
		<?php get_sidebar(  ); ?>
	</div><!-- end #inner-content -->
</div><!-- end #container -->


<?php get_footer(); ?>