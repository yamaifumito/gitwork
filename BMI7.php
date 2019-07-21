<?php
	if (isset($_GET['cm'])){
		$cm = $_GET['cm'];
		$kg = $_GET['kg'];
	} else {
		$cm = "";
		$kg = "";
	}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>BMI.php</title>
</head>
<body>
<h1>BMI（肥満度）を求める</h1>
<form action="BMI.php" method="get">
身長：<input type="text" name="cm" value="<? echo $cm; ?>">cm<br>
体重：<input type="text" name="kg" value="<? echo $kg; ?>">kg<br>
<input type="submit" value="計算">
</form>
<hr>
<?php
if (isset($_GET['cm'])){
	// 肥満度（10000×体重÷(身長)2）
	$bmi = 10000*$kg/(pow($cm,2));
	$bmi = ("計算式"); 
	if ($bmi >= 25) {
		echo "太り気味です";
	} elseif ($bmi < 18.5) {
		echo "やせ気味です";
	} else {
		echo "標準体重です";
	}
}
?>
</body>
</html>