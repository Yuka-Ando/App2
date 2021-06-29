<!-- ログインページ -->
<!doctype html>
<html lang="ja">
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
	<script type="text/javascript" src="tab.js"></script>
	<title>担当者通知システム</title>
	<link rel="stylesheet" href="style.css">
	<?php
    if($_SERVER['REQUEST_METHOD']) {
        
    }
    ?>
</head>

<body>
	<div id="wrapper">
		<div id="header"><span>ログインページ</span></div>
		<div id="main">
			<div id="tab">
				<!-- ログイン学生 -->
				<label id="rogin_box_student">
					<input type="radio" name="tab" id="tab1" checked>
					<em>学生</em>
				</label>
				<div id="box1">
					<div class="text1">
					<span>学年・クラス</span>
						<form action="./index_student.php" method="post" name="profile">
							<select name="grade">
								<option name="grade" value="1" selected>1年生</option>
								<option name="grade" value="2">2年生</option>
								<option name="grade" value="3">3年生</option>
								<option name="grade" value="4">4年生</option>
								<option name="grade" value="5">5年生</option>
							</select>
							<select name="class">
								<option name="class" value="CN" selected>CN</option>
								<option name="class" value="ES">ES</option>
								<option name="class" value="IT">IT</option>
							</select><br>
							<span>出席番号</span>
							<input type="text" name="number" style="width: 140px;"></p>
							<!-- <span>パスワード</span>
							<input type="text" name="password" style="width: 140px;"></p> -->
							<input type="submit" id="rogin_button" formaction="index_student.php" value="ログイン">
						</form>
					</div>
				</div>

				<!-- ログイン担任 -->
				<label id="rogin_box_teacher">
					<input type="radio" name="tab" id="tab2">
					<em>担任</em>
				</label>
				<div id="box2">
					<div class="text2">
						<span>学年・クラス</span>
						<form action="./index_teacher.php" method="post" name="profile">
							<select name="grade">
								<option name="grade" value="1" selected>1年生</option>
								<option name="grade" value="2">2年生</option>
								<option name="grade" value="3">3年生</option>
								<option name="grade" value="4">4年生</option>
								<option name="grade" value="5">5年生</option>
							</select>
							<select name="class">
								<option name="class" value="CN" selected>CN</option>
								<option name="class" value="ES">ES</option>
								<option name="class" value="IT">IT</option>
							</select><br>
							<!-- <span>パスワード</span>
							<input type="text" name="password" style="width: 140px;"></p> -->
							<input type="submit" id="rogin_button" formaction="index_teacher.php" value="ログイン">
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="footer"><span>フッター</span></div>
	</div>
</body>
</html>
