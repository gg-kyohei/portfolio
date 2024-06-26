<?php
$title = 'My Site Works';
$description = '説明（トップページ）';
$is_home = true;  //ホーム（トップページ）の判定用の変数を定義（header.php で使用）
$path = '../';  //追加（カレントディレクトリを表す ./ ）
include $path .'inc/head.php'; //変更（$path. を追加）
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include $path . 'inc/head.php'; ?> <!-- head.php の読み込み -->
	<link rel="stylesheet" href="<?php echo $path; ?>css/works.css">
</head>

<body>
	<?php include $path . 'inc/header.php'; ?> <!-- header.php の読み込み -->

	<main class="main">
		<div class="works">
			<div class="works-inner inner">
				<h2 class="works-heading">WORKS</h2>

				<div class="works-container">
					<ul class="works-list">
						<li class="works-item">
							<a href="<?php echo $path; ?>works/contents1/index.php">
								<img src="<?php echo $path; ?>img/works1.jpg" alt="制作物1">
								<h3>タイトル</h3>
								<p class="works-item">説明</p>
							</a>
						</li>

						<li class="works-item">
							<a href="<?php echo $path; ?>works/contents2/index.php">
								<img src="<?php echo $path; ?>img/works2.jpg" alt="制作物2">
								<h3>タイトル</h3>
								<p category>説明</p>
							</a>
						</li>

						<li class="works-item">
							<a href="<?php echo $path; ?>works/contents3/index.php">
								<img src="<?php echo $path; ?>img/works3.jpg" alt="制作物3">
								<h3>タイトル</h3>
								<p category>説明</p>
							</a>
						</li>

						<li class="works-item">
							<a href="<?php echo $path; ?>works/contents4/index.php">
								<img src="<?php echo $path; ?>img/works4.jpg" alt="制作物4">
								<h3>タイトル</h3>
								<p category>説明</p>
							</a>
						</li>

						<li class="works-item">
							<a href="<?php echo $path; ?>works/contents5/index.php">
								<img src="<?php echo $path; ?>img/works5.jpg" alt="制作物5">
								<h3>タイトル</h3>
								<p category>説明</p>
							</a>
						</li>

						<li class="works-item">
							<a href="<?php echo $path; ?>works/contents6/index.php">
								<img src="<?php echo $path; ?>img/works6.jpg" alt="制作物6">
								<h3>タイトル</h3>
								<p category>説明</p>
							</a>
						</li>

						<li class="works-item">
							<a href="<?php echo $path; ?>works/contents7/index.php">
								<img src="<?php echo $path; ?>img/works1.jpg" alt="制作物7">
								<h3>タイトル</h3>
								<p category>説明</p>
							</a>
						</li>

						<li class="works-item">
								<a href="<?php echo $path; ?>works/contents8/index.php">
								<img src="<?php echo $path; ?>img/works2.jpg" alt="制作物8">
								<h3>タイトル</h3>
								<p category>説明</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</main>

	<?php include $path . 'inc/footer.php'; ?> <!-- footer.php の読み込み -->

</body>

</html>