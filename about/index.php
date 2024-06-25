<?php
$title = 'My Site About';
$description = '説明（トップページ）';
$is_home = true;  //ホーム（トップページ）の判定用の変数を定義（header.php で使用）
$path = '../';  //追加（カレントディレクトリを表す ./ ）
include $path .'inc/head.php'; //変更（$path. を追加）
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include $path . 'inc/head.php'; ?> <!-- head.php の読み込み -->
	<link rel="stylesheet" href="<?php echo $path; ?>css/about.css">
</head>

<body>
	<?php include $path . 'inc/header.php'; ?> <!-- header.php の読み込み -->

	<main class="main">
		<section class="profile">
			<div class="profile-inner">
				<h2 class="profile-heading">ABOUT</h2>

				<img src="<?php echo $path; ?>img/about.jpg" alt="自画像">

				<h3 class="profile-name">前田翔子</h3>

				<p class="profile-text">1996年11月18日生まれ。愛知県出身。</p>
			</div>
		</section>

		<section class="biography">
			<div class="biography-inner">
				<h2 class="biography-heading">Biography</h2>

				<div class="biography-container">
					<ul class="biography-list">
						<li class="biography-item">
							<p>1996.11</p>
							<p>幼少期</p>
							<p>テキストテキストテキスト<br>
							テキストテキストテキスト<br>
							テキストテキストテキスト<br></p>
						</li>
						
						<li class="biography-item">
							<p>2015.04</p>
							<p>大学入学</p>
							<p>テキストテキストテキスト<br>
							テキストテキストテキスト<br>
							テキストテキストテキスト<br></p>
						</li>

						<li class="biography-item">
							<p>2019.04</p>
							<p>卒業後</p>
							<p>テキストテキストテキスト<br>
							テキストテキストテキスト<br>
							テキストテキストテキスト<br></p>
						</li>

						<li class="biography-item">
							<p>2024.03</p>
							<p>現在</p>
							<p>テキストテキストテキスト<br>
							テキストテキストテキスト<br>
							テキストテキストテキスト<br></p>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="strength">
			<div class="strength-inner">
				<h2 class="strength-header">Strength</h2>

				<div class="circle-container">
					<div class="circle">Comunication</div>
					<div class="circle">cautious</div>
					<div class="circle">Ambition</div>
				</div>

				<div class="strength-container">
					<ul class="strength-list">
						<li class="strength-item">
							<h3>Comunication</h3>
							<h4>コミュニケーション</h4>
							<p>テキストテキストテキスト<br>
							テキストテキストテキスト<br>
							テキストテキストテキスト<br></p>
						</li>

						<li class="strength-item">
							<h3>cautious</h3>
							<h4>慎重</h4>
							<p>テキストテキストテキスト<br>
							テキストテキストテキスト<br>
							テキストテキストテキスト<br></p>
						</li>

						<li class="strength-item">
							<h3>Ambition</h3>
							<h4>向上心</h4>
							<p>テキストテキストテキスト<br>
							テキストテキストテキスト<br>
							テキストテキストテキスト<br></p>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</main>

	<?php include $path . 'inc/footer.php'; ?> <!-- footer.php の読み込み -->
</body>

</html>