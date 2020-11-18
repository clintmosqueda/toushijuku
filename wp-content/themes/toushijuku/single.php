<?php
/**
 * The template for displaying all single posts.
 *
 * @see    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
get_header(); ?>

<div class="l-wrapper">
	<main class="main">
		<section class="main-section">
			<div class="blog">
				<?php while (have_posts()) : the_post(); ?>
					<h1 class="blog-title"><?php the_title();?></h1>
					<div class="blog-content">
						<?php the_content();?>
					</div>
				<?php endwhile; ?>
			</div>
		</section>
		<?php get_sidebar(); ?>
	</main>
</div>
<?php
get_footer();
