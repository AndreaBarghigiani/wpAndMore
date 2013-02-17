				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">
					<div id="social">
						<h2>Social Network</h2>
						<div id="box">
							<ul>
								<li id="gp"><a href="http://plus.google.com/b/113990373278589561509/113990373278589561509/" title="WpAndMore+">Google+</a></li>
								<li id="fb"><a href="http://www.facebook.com/pages/WordPress-AndMore/268898173174166" title="Pagina wpAndMore">Facebook</a></li>
								<li id="tw"><a href="https://twitter.com/Andrea_AndMore" title="Profilo wpAndMore">Twitter</a></li>
								<li id="yt"><a href="http://www.youtube.com/user/Pr0v4" title="Canale wpAndMore">YouTube</a></li>						
								<li id="ln"><a href="http://it.linkedin.com/in/andreabarghigiani/" title="Profilo LinkedIn di Andrea Barghigiani">LinkedIn</a></li>
							</ul>
						</div>
					</div>
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>
					<div id="gplus">
						<!-- Inserisci questo tag nel punto in cui vuoi che sia visualizzato l'elemento badge. -->
					<div class="g-plus" data-width="302" data-href="//plus.google.com/113990373278589561509" data-rel="publisher"></div>
				
					<!-- Inserisci questo tag dopo l'ultimo tag di badge. -->
					<script type="text/javascript">
					  window.___gcfg = {lang: 'it'};
					
					  (function() {
					    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
					    po.src = 'https://apis.google.com/js/plusone.js';
					    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
					  })();
					</script>	
					</div>
					
				</div>