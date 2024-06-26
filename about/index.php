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
			<div class="profile-inner inner">
				<h2 class="profile-heading">ABOUT</h2>

				<img src="<?php echo $path; ?>img/about.jpg" alt="自画像">

				<h3 class="profile-name">前田翔子</h3>

				<p class="profile-text">1996年11月18日生まれ。愛知県出身。</p>
			</div>
		</section>

		<section class="biography">
			<div class="biography-inner inner">
				<h2 class="biography-heading">Biography</h2>

				<div class="biography-container">
					<ul class="biography-list">
						<li class="biography-item">
							<p class="biography-date">1996.11</p>
							<p class="biography-title">幼少期</p>
							<span class="biography-dot"></span>
							<p class="biography-description">テキストテキストテキスト<br>
							テキストテキストテキスト<br>
							テキストテキストテキスト<br></p>
						</li>
						
						<li class="biography-item">
							<p class="biography-date">2015.04</p>
							<p class="biography-title">大学入学</p>
							<span class="biography-dot"></span>
							<p class="biography-description">テキストテキストテキスト<br>
							テキストテキストテキスト<br>
							テキストテキストテキスト<br></p>
						</li>

						<li class="biography-item">
							<p class="biography-date">2019.04</p>
							<p class="biography-title">卒業後</p>
							<span class="biography-dot"></span>
							<p class="biography-description">テキストテキストテキスト<br>
							テキストテキストテキスト<br>
							テキストテキストテキスト<br></p>
						</li>

						<li class="biography-item">
							<p class="biography-date">2024.03</p>
							<p class="biography-title">現在</p>
							<span class="biography-dot"></span>
							<p class="biography-description">テキストテキストテキスト<br>
							テキストテキストテキスト<br>
							テキストテキストテキスト<br></p>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="strength">
			<div class="strength-inner inner">
				<h2 class="strength-heading">Strength</h2>

				<div class="circle-container">
					<div class="circle">Comunication</div>
					<div class="circle">cautious</div>
					<div class="circle">Ambition</div>
				</div>

				<div class="strength-container">
					<ul class="strength-list">
						<li class="strength-item">
							<div class="strength-block">
								<h3 class="strength-title">Comunication</h3>
								<h4 class="strength-subtitle">コミュニケーション</h4>
							</div>
							<p class="strength-description">テキストテキストテキスト<br>
							テキストテキストテキスト<br>
							テキストテキストテキスト<br></p>
						</li>

						<li class="strength-item">
							<div class="strength-block">
								<h3 class="strength-title">cautious</h3>
								<h4 class="strength-subtitle">慎重</h4>
							</div>
							<p class="strength-description">テキストテキストテキスト<br>
							テキストテキストテキスト<br>
							テキストテキストテキスト<br></p>
						</li>

						<li class="strength-item">
							<div class="strength-block">
								<h3 class="strength-title">Ambition</h3>
								<h4 class="strength-subtitle">向上心</h4>
							</div>
							<p class="strength-description">テキストテキストテキスト<br>
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