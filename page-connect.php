
<?php get_header();
/*
Template Name: Connect
*/
?>

<!-- Row for main content area -->
	<div class="small-11 small-centered large-8 large-uncentered columns" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header class="entry-header">
				<?php
					// check if the post has a Post Thumbnail assigned to it.
					if ( has_post_thumbnail() ) { ?>
					<div class="featured-header">
						<div class="featured-header-image">
							<?php the_post_thumbnail('fd-featured'); ?>
						</div>

						<h1 class="entry-title featured-title"><?php the_title(); ?></h1>
					</div>
					
					<?php } else {?>

						<h1 class="entry-title no-featured-image"><?php the_title(); ?></h1>

					<?php } ?>
				<!-- <?php reverie_entry_meta(); ?> -->
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<div class="program-list">
				<?php if( have_rows('group') ): ?>
				<h2>Groups</h2>
 
				    <ul class="programs">
				 
				    <?php while( have_rows('group') ): the_row(); ?>
				 
				        <li class="program panel clearfix">
							<div class="small-centered medium-4 medium-uncentered columns">
					        	<?php $image = get_sub_field('group_logo');?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							</div>
							<div class="medium-8 columns">
					        	<h3><?php the_sub_field('group_name'); ?></h3>
					        	<p><?php the_sub_field('group_description'); ?></p>
					        	<div class="row">
					        		<div class="medium-5 columns">
					        			<h5 class="subheader">Meets</h5>
					        			<?php the_sub_field('group_meets'); ?>
					        		</div>
					        		<div class="medium-7 columns">
					        			<h5 class="subheader">Website</h5>
					        			<?php the_sub_field('group_website'); ?>
					        		</div>
					        	</div>
					        </div>
				        </li>
				        
				    <?php endwhile; ?>
				 
				    </ul>
 
				<?php endif; ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
			</footer>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>