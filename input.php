<html>
<head>
<meta charset="utf-8">
<title>課題テンプレート</title>
<link rel = "stylesheet" href = "css/style.css">
<script src="js/jquery-2.1.3.min.js"></script>
</head>
<body>

<header>
	<div class = "title">
		<h1>🏆 FIFA WORLD CUP QATAR2022 優勝予想 🏆</h1>
	</div>
</header>

<div class = "container" >
	<img src="img/fifa2022.jpg" alt="" id = "img">
</div>

<form id = "form", action="write.php", method= "POST"> 
<dl class="form-inner",  style="list-style-type: none">
	<dt>Q1. お名前</dt>
	<dd><input id="name", type="text" name="name"></dd>
	<dt>Q2. 日本の結果は？</dt>
	<dd><select id="jpresult" name="jp"></select></dd>
	<dt>Q3. 優勝は？</dt>
	<dd><select id="n1" name="country"></select></dd>
	<dd><input type="submit" value="送信"></dd>
</dl>
</form>

<script>
// 日本の結果の選択肢
let result = ["予選敗退", "ベスト16", "ベスト8", "ベスト4", "優勝?!"];
resultHTML = "";

for(let i=0; i<5; i++){
    resultHTML += `<option value="${result[i]}">${result[i]}</option>`
}
$("#jpresult").html(resultHTML);

// 優勝国の選択肢
let n1 = ["ブラジル", "アルゼンチン", "ベルギー", "フランス", "イングランド", "オランダ", "ポルトガル", "ドイツ", "スペイン", "その他"];
n1HTML = "";

for(let i=0; i<10; i++){
    n1HTML += `<option value="${n1[i]}">${n1[i]}</option>`
}
$("#n1").html(n1HTML);

</script>

</body>
</html>