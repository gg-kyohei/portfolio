<?php
$title = 'My Site Contact';
$description = '説明（トップページ）';
$is_home = true;  //ホーム（トップページ）の判定用の変数を定義（header.php で使用）
$path = '../';  //追加（カレントディレクトリを表す ./ ）
include $path .'inc/head.php'; //変更（$path. を追加）
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include $path . 'inc/head.php'; ?> <!-- head.php の読み込み -->
	<link rel="stylesheet" href="<?php echo $path; ?>css/contact.css">
</head>

<body>
	<?php include $path . 'inc/header.php'; ?> <!-- header.php の読み込み -->

	<main class="main">
		<div class="contact">
			<div class="contact-inner inner">
				<h1 class="contact-heading">CONTACT</h1>

				<p class="contact-text">ご興味を持っていただき誠にありがとうございます。<br>
				お仕事のご相談、ご依頼、ご質問など、お気軽にお問い合わせください。</p>

				<form action="#" class="contact-form">
					<dl class="form-area">
						<dt><span class="required">お名前</span></dt>
						<dd><input type="text" class="input-text" name="name" required></dd>

						<dt><span class="required">メールアドレス</span></dt>
						<dd><input type="email" class="input-text" name="email" required></dd>

						<dt>お電話番号</dt>
						<dd><input type="tel" class="input-text" name="tel"></dd>

						<dt>お客様について</dt>
						<dd>
							<select name="genre" class="select-box">
								<option value="法人・個人事業主">法人・個人事業主</option>
								<option value="個人">個人</option>
							</select>
						</dd>

						<dt>お問い合わせ種別</dt>
						<dd>
							<select name="genre" class="select-box">
								<option value="ご相談・ご依頼">ご相談・ご依頼</option>
								<option value="お問い合わせ">お問い合わせ</option>
								<option value="その他">その他</option>
							</select>
						</dd>

						<dt><span class="required">お問い合わせ内容</span></dt>
						<dd><textarea name="message" class="message" required></textarea></dd>

						<button class="submit-button" type="submit">Submit</button>
					</dl>
				</form>

				<div class="Back-button-container">
					<button class="Back-button" type="back">
						<a href="<?php echo $path; ?>index.php">←Back to Top</a>
					</button>
				</div>
			</div>
		</div>
	</main>

	<?php include $path . 'inc/footer.php'; ?> <!-- footer.php の読み込み -->
</body>

</html>