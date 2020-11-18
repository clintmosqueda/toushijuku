<?php 
/*
* Template name: Forums
*/
get_header(); ?>
<div class="l-wrapper">
	<main class="main">
		<section class="main-section forums">
			<h2 class="forums-heading section-heading section-heading-pages">メルマガ登録</h2>
			<div class="forums-content">
				<?php echo do_shortcode( '[bbp-forum-index]' );?>
				
			</div>
		</section>
		<?php get_sidebar(); ?>
	</main>
</div>
<?php
get_footer();