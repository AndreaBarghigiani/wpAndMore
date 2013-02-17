<?php
/*
Template Name: Pagina Help
*/
?>
<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				   <div id="main" class="eightcol first clearfix" role="main">
						
						<h1>Aiuto WordPress</h1>
						
						<section id="intro" class="post">
							<p>Benvenuto all'interno della sezione <strong>Help</strong>. Da qua potrai chiedermi aiuto per risolvere i tuoi problemi con WordPress. Inoltre, sarai in grado di scoprire nuovi siti ai quali chiedere supporto.</p>
							<p>Non perderti neanche un articolo, iscriviti alla newsletter.</p>
							
							<?php get_template_part( 'modulo', 'newsletter' ); ?>
						</section>
						
						<h2>Lavora con Andrea</h2>
						
					   	<article class="post help">
					   		<section class="entry-content clearfix">
					   			<p>Non perdere l'occasione di avermi al tuo fianco pronto ad aiutarti nella soluzione del tuo problema.</p>
					   			<p>Potrai affidarmi il tuo problema e io lo risolver&ograve; nel tempo prestabilito, oppure, potremmo lavorare insieme sul progetto alla ricerca degli errori; proprio come avere un tutor personale.</p>
					   			
					   			<h2>Non Credi nelle mie Competenze?</h2>
					   			<p>Nessun problema, su wpAndMore troverai molti miei articoli e corsi che ti permetteranno di capire quanto a fondo conosco questa piattaforma.</p>
					   			
					   			<h2>Ti Sembra Troppo Dover Pagare?</h2>
					   			<p>Lavorare a contatto con me ti permetter&aacute; di velocizzare i tempi per lo sviluppo della tua soluzione, ma se hai tempo da spendere, controlla la sezione Community, al suo interno troverai le mie presenze web dove contribuisco a WordPress...</p>
					   			
					   			<h2>Vuoi Lavorare con Me?</h2>
					   			<p>Tutto quello che ti resta da fare &egrave; <a href="http://test.wpandmore.info/contatti/" titolo="Contatti wpAndMore">compilare il modulo contatti</a> e verrai ricontattato entro 24hr.</p>
					   			
					   		</section>
					   	</article>
					   	
					   	<h2>Community</h2>
						<small><strong><em>Nota Bene:</em></strong> queste sono le community dove potrai trovare Andrea Barghigiani assieme a molti altri esperti WordPress che saranno in grado di darti una mano con i problemi che hai con questa piattaforma.</small>
						   	
						<article class="post community">
						   		
							<section class="entry-content clearfix">
						   		<img src="<?php bloginfo( 'template_directory'); ?>/library/images/wordpress-italy-plus.jpg">
						   		<h3><a href="https://plus.google.com/communities/109254048492234113886" title="Comunit&agrave; WordPress Italy+">WordPress Italy+</a></h3>
						   		<p>Se utilizzi WordPress per lavoro o passione, unisciti a questa community e condividi con noi le tue esperienze, le tue idee e le tue domande.</p>
						   	</section>
						   		
						</article>
						   	
						<article class="post community">
						   		
						   	<section class="entry-content clearfix">
						   		<img src="<?php bloginfo( 'template_directory'); ?>/library/images/wordpress-italia.jpg">
						   		<h3><a href="https://plus.google.com/communities/109961799111080121493" title="Comunit&agrave; WordPress Italia">WordPress Italia</a></h3>
						   		<p>La community italiana dedicata a tutti i professionisti (sviluppatori, web designer, copy writer) del web che lavorano sulla piattaforma WordPress.</p>
						   	</section>
						   		
						</article>
						   		
						<article class="post community">
						   		
						   	<section class="entry-content clearfix">
						   		<img src="<?php bloginfo( 'template_directory'); ?>/library/images/italian-wordpress-developer.jpg">
						   		<h3><a href="https://www.facebook.com/groups/italianwordpress/" title="Gruppo Italian WordPress Developer">Italian WordPress Dev</a></h3>
						   		<p>Gruppo di ritrovo italiano degli sviluppatori WordPress, Web Designer, utilizzatori, blogger e chiunque abbia un interesse per WordPress.</p>
						   	</section>
						   		
						</article>
						
				    </div> <!-- end #main -->
    
				    <?php get_sidebar( 'front' ); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
