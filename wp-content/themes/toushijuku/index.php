<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
global $wp_query; 
get_header(); ?>
<div class="l-wrapper">
	<main class="main">
		<section class="main-section">
			<div class="main-about">
				<h2 class="main-about-heading section-heading">不動産投資塾新聞社について</h2>
				<p class="main-about-text">私たち不動産投資塾新聞社は、<a class="main-about-link" href="">世の中の表に出てこない情報</a>などを独自な方法で収集しお
				送りいたします。不動産投資を始めたい方、または既に経営されている方が安心して不動
				産投資と向き合い、適切な判断を下すことができるようになることが願いです。</p>
			</div>

			<div class="main-article">
				<h2 class="main-article-heading section-heading">新着記事 <span>NEW</span></h2>
				<?php $articles_query = query_articles();
					if($articles_query->have_posts()): ?>
						<ul class="main-article-list">
							<?php while($articles_query->have_posts()):
								$articles_query->the_post(); ?>
									<li class="main-article-item">
										<a class="main-article-link" href="<?php echo get_permalink()?>"><?php echo get_the_title()?></a>
										<span class="main-article-author">著：<?php echo get_the_author_meta('display_name')?></span>
									</li>
							<?php  endwhile; ?>
						</ul>
				<?php endif; ?>
				<a class="main-article-button" href="<?php echo resolve_archive_url(ARTICLES_POST_TYPE)?>">【他の記事一覧】</a>
			</div>

			<div class="main-leakinfo">
				<h2 class="main-leakinfo-heading section-heading">リーク情報あつめています</h2>
				<p class="main-leakinfo-text">それっぽいテキストそれっぽいテキストそれっぽいテキストそれっぽいテキストそれっぽ
				いテキストそれっぽいテキストそれっぽいテキストそれっぽいテキストそれっぽいテキス
				トそれっぽいテキストそれっぽいテキストそれっぽいテキスト</p>
				<a class="main-leakinfo-button button" href="">ご依頼方法→</a>
				<div class="main-leakinfo-note">
					<h2 class="main-leakinfo-note-heading">！！！！！注意！！！！！</h2>
					<p class="main-leakinfo-note-text">危険フリーテキスト危険フリーテキスト危険フリーテキスト危険フリーテキス
					ト危険フリーテキスト危険フリーテキスト危険フリーテキスト危険フリーテキ
					スト危険フリーテキスト危険フリーテキスト危険フリーテキスト危険フリーテ
					キスト危険フリーテキスト危険フリーテキスト</p>		
				</div>
			</div>

			<div class="main-article">
				<h2 class="main-article-heading section-heading">よく読まれている記事</h2>
				<ul class="main-article-list main-article-list-numbered">
				<?php
	$popular_articles_query = query_popular_articles();

  while($popular_articles_query->have_posts()): $popular_articles_query->have_posts();
		
  $popular_articles_query->the_post();?>
<li class="main-article-item main-article-item-numbered">
<a class="main-article-link" href="<?php echo get_permalink()?>"><?php echo get_the_title()?></a>
<span class="main-article-author">著：<?php echo get_the_author_meta('display_name')?></span>
</li>
	<?php 
		endwhile; 
		
		 ?>

					<!-- <li class="main-article-item main-article-item-numbered">
						<a class="main-article-link" href="">災害大国の日本で、不動産投資家は台風や地震をどう対策すべきか</a>
						<span class="main-article-author">著：不動産太郎</span>
					</li>
					<li class="main-article-item main-article-item-numbered">
						<a class="main-article-link" href="">水漏れで200万円の請求を受けた話など、トラブル事例</a>
						<span class="main-article-author">著：不動産太郎</span>
					</li>
					<li class="main-article-item main-article-item-numbered">
						<a class="main-article-link" href="">災害大国の日本で、不動産投資家は台風や地震をどう対策すべきか</a>
						<span class="main-article-author">著：不動産太郎</span>
					</li>
					<li class="main-article-item main-article-item-numbered">
						<a class="main-article-link" href="">水漏れで200万円の請求を受けた話など、トラブル事例</a>
						<span class="main-article-author">著：不動産太郎</span>
					</li>
					<li class="main-article-item main-article-item-numbered">
						<a class="main-article-link" href="">災害大国の日本で、不動産投資家は台風や地震をどう対策すべきか</a>
						<span class="main-article-author">著：不動産太郎</span>
					</li>
					<li class="main-article-item main-article-item-numbered">
						<a class="main-article-link" href="">水漏れで200万円の請求を受けた話など、トラブル事例</a>
						<span class="main-article-author">著：不動産太郎</span>
					</li> -->
				</ul>
				<a class="main-article-button" href="">【他の記事一覧】</a>
			</div>

			<div class="main-block-common main-block-common-newsletter">
				<h2 class="main-block-common-heading-newsletter section-heading">メルマガ登録⇨</h2>
				<a class="main-block-common-button button" href="">登録</a>
			</div>

			<div class="main-block-common main-block-common-question">
				<h2 class="main-block-common-question-heading section-heading">ご質問等⇨</h2>
				<a class="main-block-common-button button" href="">質問する</a>
			</div>

		</section>
		<?php get_sidebar(); ?>
	</main>
</div>
<?php

get_footer();

