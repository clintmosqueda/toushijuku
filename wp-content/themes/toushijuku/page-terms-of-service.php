<?php
/*
* Template name: Terms of Service
*/
get_header(); ?>
<div class="l-wrapper">
	<main class="main">
		<section class="main-section terms">
			<?php while (have_posts()) : the_post(); ?>
				<h2 class="privacy-heading section-heading section-heading-pages">利用規約</h2>
				<div class="terms-content">
					<?php the_content();?>
				</div>
			<?php endwhile; ?>
		</section>
		<?php get_sidebar(); ?>
	</main>
</div>
<?php
get_footer();