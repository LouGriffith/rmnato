		</div><!-- Row End -->
	</div><!-- Container End -->
	
	<div id="footer">
		<footer class="full-width footer" role="contentinfo">
			<div class="row">
				<div class="small-5 medium-2 columns footer-logo">
	        		<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><i class="icon-rm"></i><i class="icon-nato"><span><?php bloginfo( 'name' ); ?><span></i></a></h2>
				</div>

				<div class="small-7 medium-2 columns">
					&nbsp;
				</div>

				<div class="small-12 medium-8 columns">
					<?php
					    $args = array(
							'numberposts' => 1,
					      	'post_type' => 'location',
					    );
					    
					    $location = new WP_Query( $args );
					    if( $location->have_posts() ) {
					      	while( $location->have_posts() ) {
					        	$location->the_post();
					        ?>
					          
					        <div class="small-6 medium-7 columns">
								<ul class="footer-social">
									<li><a href="https://www.facebook.com/<?php the_field('facebook'); ?>"><i class="icon-facebook"></i></a></li>
									<li><a href="https://www.twitter.com/<?php the_field('twitter'); ?>"><i class="icon-twitter"></i></a></li>
								</ul>
							</div>

							<div class="small-6 medium-5 columns location-info">
								<h3 class="location-phone"><?php the_field('phone'); ?></h3>

								<address class="location-address">
									<?php the_field('street_address'); ?><br>
									<?php the_field('city'); ?>, <?php the_field('state'); ?> <?php echo the_field('zip'); ?>
								</address>

								<!-- <a class="location-directions" href ="http://maps.google.com/maps?saddr=Start&daddr=<?php the_field('street_address'); ?> <?php the_field('city'); ?>,<?php the_field('state'); ?> <?php echo the_field('zip'); ?>">Get Directions</a> -->
							</div>

					        <?php
					      }
					    }
					    else {
					      echo '';
					    }
					  ?>
				</div>

			</div>

			<div class="row">
				<div class="small-1 medium-2 columns">
					
				</div>

				<div class="small-11 medium-10 columns">
					<p class="copyright"><span class="copy">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</span><span class="handcrafted">  <?php _e('Handcrafted by','lou'); ?> <a href="http://lougriffith.com" rel="nofollow" title="Lou">Lou</a>.</span></p>
				</div>
			</div>
		</footer>
	</div>
	<?php wp_footer(); ?>

	<script>
		(function($) {
			$(document).foundation();
		})(jQuery);
	</script>
		
	</body>
</html>