<?php
/*
Template Name: Staff
*/
get_header(); ?>

<!-- Row for main content area -->
	<div id="content" class="large-8 columns" role="main">
		<h1 class="entry-title">Staff</h1>
		
		<ul class="staff">
		<?php /* Start loop */

			$custom_terms = get_terms('staff_type');

			foreach($custom_terms as $custom_term) {
			    wp_reset_query();
			    $args = array('post_type' => 'staff',
			        'tax_query' => array(
			            array(
			                'taxonomy' => 'staff_type',
			                'field' => 'slug',
			                'terms' => $custom_term->slug,
			            ),
			        ),
			     );

			     $loop = new WP_Query($args);
			     if($loop->have_posts()) {
			        while($loop->have_posts()) : $loop->the_post();
			       		get_template_part( 'content', 'staff-member' );
			        endwhile;
			     }
			}

		?>
		</ul>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>