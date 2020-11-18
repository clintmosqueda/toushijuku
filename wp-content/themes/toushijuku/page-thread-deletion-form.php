<?php 
/*
* Template name: Thread Deletion Form
*/
get_header(); ?>
<div class="l-wrapper">
	<main class="main">
		<section class="main-section">
			<?php while (have_posts()) : the_post(); ?>
				<h2 class="section-heading section-heading-pages">削除依頼 - タイトルタイトルタイトルタイトル ==＞No：2552</h2>
				<div class="content">
					<form action="" class="form">
						<p class="form-text">この度は、健全なコミュニティ運営へのご協力のほど、誠にありがとうございます。
						必ず、利用規約に記載のガイドラインをご確認いただき、
						ご理解をいただいた上で削除のご依頼をいただけますようお願い申し上げます。
						なお、本フォームは、削除依頼専用の窓口となっております。
						こちらからのご依頼につきましての、ご返信、ご連絡は致しかねますので、あらかじめご了承ください。
						また、各投稿の掲載可否に関する個別の判断理由のご案内は行わせていただいておりませんが、
						ご返信が必要な内容につきましては、別途ご用意しておりますお問い合わせ窓口よりご連絡ください。</p>
						<p class="form-text">ガイドラインに同意して、依頼フォームに入力する</p>
						<div class="form-content">
							<div class="form-block">
								<label class="form-label">題名：</label>
								<div class="form-input-wrap xlarge">
									<input class="form-input" type="text" placeholder="自動入力">
								</div>
							</div>
							<div class="form-block">
								<label class="form-label">ニックネーム：</label>
								<div class="form-input-wrap medium">
									<input class="form-input" type="text">
								</div>
							</div>
							<div class="form-block">
								<label class="form-label">削除理由：</label>
								<div class="form-input-wrap large">
									<input class="form-input" type="text" placeholder="選択してください">
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