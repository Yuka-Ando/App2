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

<?php
    // $grade 学年
    if (isset($_POST['grade'])) {
        $grade = $_POST['grade'];
		//echo $grade;
    } else {

    }
	// $class クラス
	if (isset($_POST['class'])) {
        $class = $_POST['class'];
		//echo $class;
    } else {

    }
	// $number 出席番号
	if (isset($_POST['number'])) {
        $number = $_POST['number'];
		//echo $number;
    } else {

    }
?>

<body>
	<div id="wrapper">
		<div id="header"><span>学生用メインページ</span></div>
			<div id="main">
				<div id="menu">
					<span>Menu</span>
					<input type="button" id="calender_button" onclick="location.href='./calender.php'" value="カレンダーページ"><br>
					<input type="button" id="verification_button" onclick="location.href='./verification.php'"value="今週の担当者確認ページ"><br>
				</div>
				<div id="tantou">
					<span>今週のあなたの担当</span>
					<div id="output"></div>
				</div>
			</div>
		<div id="footer"><span>フッター</span></div>
	</div>
</body>
</html>
