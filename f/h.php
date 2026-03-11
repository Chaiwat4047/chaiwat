<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914047 นายไชยวัฒน์ เหล่าหลำ (เจย์)</title>
</head>

<body>
<h1>66010914047 นายไชยวัฒน์ เหล่าหลำ (เจย์)</h1>
<hr>

<form method="post" action="">
	xxxx <input type="number" name="a" autofocus required>
    <button type="submit" name="Submit">OK</button>
</form>

<?php
if (isset($_POST['Submit'])){
	$id = $_POST['a'];
	$y = substr($id, 0, 2) ;
	echo "<img src='http://202.28.32.211/picture/student/{$y}/{$id}.jpg' width='400'>";
}
?>


</body>
</html>