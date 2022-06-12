
<?php
date_default_timezone_set('Asia/Tokyo');

$name = $_POST["name"];
$jp = $_POST["jp"];
$country = $_POST["country"];
$c = ",";

//文字作成
$str = date("Y年m月d日 H:i").$c.$name.$c.$jp.$c.$country."\n";
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str);
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>投票しました</h1>

<ul style="list-style-type: none">
    <li><a href="read.php">結果へ</a></li>
    <li><a href="input.php">投票へ戻る</a></li>
</ul>
</body>
</html>