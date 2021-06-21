<!-- ログインページ -->
<!doctype html>
<html lang="ja">
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
	<title>担当者通知システム</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="wrapper">
		<div id="header"><span>担任用メインページ</span></div>
			<div id="main">
				<div id="menu">
					<span>Menu</span>
					<input type="button" id="calender_button" onclick="location.href='./calender.php'" value="カレンダーページ"><br>
					<input type="button" id="verification_button" onclick="location.href='./verification.php'" value="今週の担当者確認ページ"><br>			
				</div>
			</div>
		<div id="footer"><span>フッター</span></div>
	</div>
</body>
</html>
