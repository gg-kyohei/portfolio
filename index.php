<?php
$title = 'My Site Top';
$description = '説明（トップページ）';
$is_home = true;  //ホーム（トップページ）の判定用の変数を定義（header.php で使用）
$path = './';  //追加（カレントディレクトリを表す ./ ）
include $path .'inc/head.php'; //変更（$path. を追加）
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include $path . 'inc/head.php'; ?><!-- head.php の読み込み -->
	<link rel="stylesheet" href="<?php echo $path; ?>css/index.css">
</head>

<body>
	<?php include $path . 'inc/header.php'; ?> <!-- header.php の読み込み -->

	<main class="main">
		<div class="mainvisual">
			<div class="mainvisual-inner">
				<h2 class="mainvisual-heading">Shoko Maeda</h2>

				<div class="video">
					<video src="<?php echo $path; ?>img/index_mv.mp4" autoplay loop muted playsinlin>
					</video>
				</div>
			</div>
		</div>

		<section class="about">
			<div class="about-inner">
				<h2 class="about-heading">ABOUT</h2>

				<div class="about-main">
					<div class="about-img">
						<img src="<?php echo $path; ?>img/about.jpg" alt="自画像">
					</div>

					<div class="about-container">
						<h3 class="about-name">前田翔子</h3>

						<p class="about-text">1996年11月18日生まれ。愛知県出身。</p>

						<div class="about-button">
							<a href="<?php echo $path; ?>about/index.php">View Profile→</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="skills">
			<div class="skills-inner">
				<h2 class="skills-heading">SKILLS</h2>

				<div class="skills-container">
					<ul class="skills-list">
						<li class="skills-item">
							<h3>Web Design</h3>
							<p>テキストテキストテキストテキス<br>
							テキストテキストテキストテキス<br>
							テキストテキストテキストテキス<br>
							テキストテキストテキストテキス<br></p>
						</li>

						<li class="skills-item">
							<h3>Web Development</h3>
							<p>テキストテキストテキストテキス<br>
							テキストテキストテキストテキス<br>
							テキストテキストテキストテキス<br>
							テキストテキストテキストテキス<br></p>
						</li>
						
						<li class="skills-item">
							<h3>AI Prompt</h3>
							<p>テキストテキストテキストテキス<br>
							テキストテキストテキストテキス<br>
							テキストテキストテキストテキス<br>
							テキストテキストテキストテキス<br></p>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="works">
			<div class="works-inner">
				<h2 class="works-heading">WORKS</h2>

				<div class="works-container">
					<ul class="works-list">
						<li class="works-item">
							<img src="<?php echo $path; ?>img/works1.jpg" alt="制作物1">

							<div class="works-text">
								<p class="works-category">01</p>
								<h3 class="works-title">title</h3>
							</div>
						</li>
						
						<li class="works-item">
							<img src="<?php echo $path; ?>img/works2.jpg" alt="制作物2">

							<div class="works-text">
								<p class="works-category">02</p>
								<h3 class="works-title">title</h3>
							</div>
						</li>

						<li class="works-item">
							<img src="<?php echo $path; ?>img/works3.jpg" alt="制作物3">

							<div class="works-text">
								<p class="works-category">03</p>
								<h3 class="works-title">title</h3>
							</div>
						</li>
					</ul>
				</div>

				<div class="works-button">
					<a href="<?php echo $path; ?>works/index.php">view more works→</a>
				</div>
			</div>
		</section>

		<section class="contact">
			<div class="contact-inner">
				<div class="contact-circle">
					<a href="<?php echo $path; ?>contact/index.php">
						<img src="<?php echo $path; ?>img/mail.png" alt="contact">
					</a>
				</div>

				<h2 class="contact-heading">CONTACT</h2>
			</div>
		</section>
	</main>

	<?php include $path . 'inc/footer.php'; ?> <!-- footer.php の読み込み -->
</body>

</html>