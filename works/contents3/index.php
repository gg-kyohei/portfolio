<?php
$title = 'My Site Works Contents';
$description = '説明（トップページ）';
$is_home = true;  //ホーム（トップページ）の判定用の変数を定義（header.php で使用）
$path = '../../';  //追加（カレントディレクトリを表す ./ ）
include $path .'inc/head.php'; //変更（$path. を追加）
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include $path . 'inc/head.php'; ?><!-- head.php の読み込み -->
	<link rel="stylesheet" href="<?php echo $path; ?>css/contents.css">
</head>

<body>
	<?php include $path . 'inc/header.php'; ?> <!-- header.php の読み込み -->

	<main class="main">
		<section class="contens-inner inner">
			<div class="contens-head">
				<h1 class="contents-heading">タイトル</h1>
				<p class="contents-data">カテゴリ、作成日</p>
			</div>

			<div class="contens-mv">
				<img src="<?php echo $path; ?>img/works3.jpg" alt="制作物3" class="contens-phot">
				<p class="contents-discription">説明テキスト</p>
			</div>

			<div class="contents-container">
				<img src="<?php echo $path; ?>img/works3.jpg" alt="制作物3" class="contents-item">
				<img src="<?php echo $path; ?>img/works3.jpg" alt="制作物3" class="contents-item">
			</div>

			<dl class="contents-list">
				<dt class="contents-list-title">サイズ</dt>
				<dd class="contents-list-discription">1080×1080px</dd>
			</dl>

			<dl class="contents-list">
				<dt class="contents-list-title">ターゲット</dt>
				<dd class="contents-list-discription">20代~30代女性</dd>
			</dl>
				
			<dl class="contents-list">
				<dt class="contents-list-title">目的</dt>
				<dd class="contents-list-discription">テキストが入ります</dd>
			</dl>

			<dl class="contents-list">
				<dt class="contents-list-title">レイアウト</dt>
				<dd class="contents-list-discription">テキストが入ります</dd>
			</dl>

			<dl class="contents-list">
				<dt class="contents-list-title">デザイン</dt>
				<dd class="contents-list-discription">テキストが入ります</dd>
			</dl>

			<dl class="contents-list">
				<dt class="contents-list-title">制作時間</dt>
				<dd class="contents-list-discription">3時間</dd>
			</dl>

			<dl class="contents-list">
				<dt class="contents-list-title">使用ツール</dt>
				<dd class="contents-list-discription">canva</dd>
			</dl>

		</section>
	</main>

	<?php include $path . 'inc/footer.php'; ?> <!-- footer.php の読み込み -->
</body>

</html>