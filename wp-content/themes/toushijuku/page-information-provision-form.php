<?php 
/*
* Template name: Information Provision Form
*/
get_header(); ?>
<div class="l-wrapper">
	<main class="main">
		<section class="main-section">
			<?php while (have_posts()) : the_post(); ?>
				<h2 class="section-heading section-heading-pages">情報提供</h2>
				<div class="content">
					<form action="" class="form">
						<p class="form-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						テキストテキストテキストテキストテキストテキスト</p>
						<div class="form-content">
							<div class="form-block">
								<label class="form-label">題名：</label>
								<div class="form-input-wrap large">
									<input class="form-input" type="text">
								</div>
							</div>
							<div class="form-block">
								<label class="form-label">ニックネーム：</label>
								<div class="form-input-wrap medium">
									<input class="form-input" type="text">
								</div>
							</div>
							<div class="form-block">
								<textarea class="form-textarea" placeholder="コメントがあれば入力してください"></textarea>
							</div>
							<div class="form-block-buttons">
								<button class="form-button" type="submit">確認する</button>
							</div>
						</div>
					</form>
				</div>
			<?php endwhile; ?>
		</section>
		<?php get_sidebar(); ?>
	</main>
</div>
<?php
get_footer();