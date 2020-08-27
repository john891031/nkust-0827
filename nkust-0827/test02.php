<button type=button><a href="index.php">回首頁</a></button>
<?php

	$names = array("小豬","小熊","大熊","大豬");
	$height = array(1.45,1.53,1.80,1.70);
	$weight = array(40,46,60,54);
	
	for ($i=0; $i <count($names); $i++) { 
		echo "姓名:" . $names[$i] . "<br>";
		$height = $heights[$i];
		$weight = $weights[$i];
		echo "身高：". $height . "公尺<br>";
		echo "體重：". $weight . "公斤<br>"; 
		$bmi = $weight / $height ** 2;
		echo "BMI：" . $bmi . "<br>";
		if ($bmi>24) {
			echo "體重有些太重囉！";
		} else if ($bmi>=18.5) {
			echo "體重很標準耶！";
		} else {
			echo "體重有些太輕了！";
		}
		echo "<hr>";
?>



