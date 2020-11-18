<?php
/*
* Template name: Privacy Policy
*/
get_header(); ?>
<div class="l-wrapper">
	<main class="main">
		<section class="main-section privacy">
			<?php while (have_posts()) : the_post(); ?>
				<h2 class="privacy-heading section-heading section-heading-pages">プライバシポリシー</h2>
				<div class="privacy-content">
					<?php the_content();?>
				</div>
			<?php endwhile; ?>
		</section>
		<?php get_sidebar(); ?>
	</main>
</div>
<?php
get_footer();