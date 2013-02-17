<?php
/*
Template Name: Pagina Blog
*/
?>
<?php get_header(  ); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				   <div id="main" role="main">
						
						<?php get_template_part( 'content', 'blog' );	?>
											   			
				    </div> <!-- end #main -->
    
				    <?php get_sidebar( 'front' ); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
