<?php get_header(); ?>
<?php
    global $wp_query; 
    $itemsFound = $wp_query->found_posts;
?>
<div class="l-wrapper">
	<main class="main">
		<section class="main-section archive">
			<h2 class="archive-heading section-heading">記事一覧</h2>
			<ul class="main-article-list archive-article-list">
				<?php while (have_posts()) : the_post(); ?>
					<li class="main-article-item archive-article-item">
						<a class="main-article-link archive-article-link" href="<?php echo get_permalink()?>"><?php echo get_the_title()?></a>
						<div class="main-article-detail">
							<time class="main-article-time"><?php echo get_the_time('Y.m.d') ?></time>
							<span class="main-article-author">著：<?php echo get_the_author_meta('display_name')?></span>
						</div>
					</li>
				<?php endwhile; ?>
			</ul>
			<div class="pagination">
				<?php wp_pagenavi(); ?>
			</div>
			<div class="category">
				<?php
					$args = array(
					'child_of'                 => 0,
					'parent'                   => '',
					'orderby'                  => 'name',
					'order'                    => 'ASC',
					'hide_empty'               => 1,
					'hierarchical'             => 1,
					'taxonomy'                 => ARTICLES_POST_TYPE_CATEGORY,
					'pad_counts'               => false );
					$categories = get_categories($args);
				?>
				<ul class="category-list">
				<?php foreach ($categories as $category) { ?>
					<li class="category-item">
						<a class="category-link" href="<?php echo get_term_link($category); ?>">【<?php echo $category->name; ?>】</a>
					</li>
				<?php } ?>
				</ul>
			</div>
		</section>
		<?php get_sidebar(); ?>
	</main>
</div>
<?php
get_footer();