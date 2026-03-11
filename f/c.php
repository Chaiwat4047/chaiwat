<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914047 นายไชยวัฒน์ เหล่าหลำ (เจย์)</title>
</head>

<body>
<h1>66010914047 นายไชยวัฒน์ เหล่าหลำ (เจย์)</h1>

<form method="post" action="">
	กรอกตัวเลข<input type="number" min"0" max="100" name="a" autofocus required>
    <button type="submit" name="Submit">OK</button>
</form>

<hr>

<?php
if(isset($_POST['Submit'])) {
	$score = $_POST['a'];    
    if ($score >= 80) {
		$grade = "A" ;
	} else if ($score >= 70) {
  		$grade = "B" ;	
	} else if ($score >= 60) {
		$grade = "C" ;
	} else if ($score >= 50) {
		$grade = "D" ;
	} else {
		$grade = "F" ;
            
	}
    echo "คะแนนของคุณคือ: <b>$score</b> คะแนน <br>";
    echo "เกรดที่ได้: <b>$grade</b>";
}
?>

</body>
</html>