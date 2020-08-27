<button type=button><a href="index.php">回首頁</a></button>
<hr>
<?php
	
	$scores = array(65,92,98,72);

	$total = array_sum($scores);
	$score = 

	$chi = 65;
	$eng = 92;
	$mat = 98;
	$his = 72;
	$total = $chi + $eng + $mat + $his;
	$score = $total / 4;

	echo "總分：". $total . "分<br>";
	echo "平均：". $score . "分<br>";
	echo "你的等級是";
	if ($score>=90) {
		echo "A！";
	} else if ($score>=80) {
		echo "B！";
	} else if ($score>=70) {
		echo "C！";
	} else if ($score>=60) {
		echo "D！";
	} else {
		echo "F！";
	}
?>

