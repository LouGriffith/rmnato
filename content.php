<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
	<header class="entry-header">
		<?php
			// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) { ?>
			<div class="featured-header">
				<div class="featured-header-image">
					<?php the_post_thumbnail('fd-featured'); ?>
				</div>

				<a href="<?php the_permalink(); ?>"><h1 class="entry-title featured-title"><?php the_title(); ?></h1></a>
			</div>
			
			<?php } else {?>

				<a href="<?php the_permalink(); ?>"><h1 class="entry-title no-featured-image"><?php the_title(); ?></h1></a>

			<?php } ?>
	</header>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
</article>