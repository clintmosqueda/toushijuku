<?php 
/*
* Template name: Operator Information
*/
get_header(); ?>
<div class="l-wrapper">
	<main class="main">
		<section class="main-section operator">
			<h2 class="operator-heading section-heading section-heading-pages">私たちの情報</h2>
			<div class="operator-content">
				<ul class="operator-info">
					<li class="oparator-info-item">名称：一般社団法人首都圏小規模住宅協会</li>
					<li class="oparator-info-item">所在地：東京都新宿区西新宿1-26-2　新宿野村ビル32階</li>
					<li class="oparator-info-item">TEL：03-5322-2946</li>
					<li class="oparator-info-item">代表者：代表理事　小島　拓</li>
					<li class="oparator-info-item">サイト：http://toshokyo.com/</li>
					<li class="oparator-info-item">営業時間：10:00-19:00　/　休業日・土日・祝日</li>
					<li class="oparator-info-item">目的：投資用不動産業界の健全化</li>
				</ul>

				<div class="operator-pledge">
					<p class="operator-pledge-text">我々は世の中の「本当の価値ある情報」を提供すると誓います。</p>
					<img src="<?php echo resolve_asset_url('/images/stairs.jpg'); ?>" alt="">
				</div>

				<h2 class="operator-heading section-heading section-heading-pages">メルマガ登録⇨</h2>
				<a class="operator-button button" href="">登録</a>
				<h2 class="operator-heading operator-heading-last section-heading section-heading-pages">ご質問等⇨</h2>
				<a class="operator-button button" href="">質問する</a>
			</div>
		</section>
		<?php get_sidebar(); ?>
	</main>
</div>
<?php
get_footer();