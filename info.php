<html>
<head>
	<meta charset="UTF-8"/>
	<title>フォーム送信</title>
	<link rel="icon" type="image/png" sizes="32x32" href="../icon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor=#703781 text=#ffffff>
	<div class="title">
	<center><a href="exhibition.html"><img src="../title.png"></a>
	</div>
	<center><font size="5"><br>
<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

//info
if($_POST['info']){
	if(isset($_POST["info_type"])){
		$type = $_POST["info_type"];
	}
	$message = "【お問い合わせ】オンライン展示会「オバケのオンラインパーティー」にて、以下のお問い合わせが届きました。\n氏名：".mb_convert_kana($_POST['name'],"K")."\n問い合わせ種類：".$type."\n内容：".mb_convert_kana($_POST['info_com'],"K");

	if(mb_send_mail("oimdem@gmail.com","お問い合わせ",$message,"From:".$_POST["mail"])==true){
		echo 'お問い合わせを送信しました。後ほどサイト管理者が内容を確認し、返信しますのでそれまでお待ちください。<br>下の「戻る」ボタンを押すとメインページに戻ります。<br><br><a href="exhibition.html" class="btn">戻る</a>';
		}else{
			echo "送信に失敗しました。お手数ですがもう一度フォームに戻って再送信してください。";
		}
}

?>
	</center></font>
</body>
</html>