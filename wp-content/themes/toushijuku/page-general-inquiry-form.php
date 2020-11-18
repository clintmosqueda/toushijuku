<?php 
/*
* Template name: General Inquiry Form
*/
get_header(); ?>
<div class="l-wrapper">
	<main class="main">
		<section class="main-section">
			<?php while (have_posts()) : the_post(); ?>
				<h2 class="section-heading section-heading-pages">問い合わせ</h2>
				<div class="content">
					<form action="" class="form">
						<p class="form-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						テキストテキストテキストテキストテキストテキスト</p>
						<div class="form-content">
							<div class="form-block">
								<label class="form-label">お名前【必須】：</label>
								<div class="form-input-wrap large">
									<input class="form-input" type="text">
								</div>
							</div>
							<div class="form-block">
								<label class="form-label">お名前（フリガナ）【必須】：</label>
								<div class="form-input-wrap large">
									<input class="form-input" type="text">
								</div>
							</div>
							<div class="form-block">
								<label class="form-label">性別：</label>
								<div class="form-input-wrap small">
									<input class="form-input" type="text">
								</div>
							</div>
							<div class="form-block">
								<label class="form-label">生年月日：</label>
								<div class="form-input-wrap small">
									<input class="form-input" type="text">
								</div>
							</div>
							<div class="form-block">
								<label class="form-label">お電話番号：</label>
								<div class="form-input-wrap medium">
									<input class="form-input" type="text">
								</div>
							</div>
							<div class="form-block">
								<label class="form-label">メールアドレス【必須】：</label>
								<div class="form-input-wrap large">
									<input class="form-input" type="text">
								</div>
							</div>
							<div class="form-block">
								<label class="form-label">メールアドレス（確認用）【必須】：</label>
								<div class="form-input-wrap large">
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