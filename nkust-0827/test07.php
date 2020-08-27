<button type=button><a href="index.php">回首頁</a></button>
<button type=button><a href="test07.php?height=1.74&weight=80">小豬的BMI</a></button>
<button type=button><a href="test07.php?height=1.64&weight=60">小熊的BMI</a></button>
<button type=button><a href="test07.php?height=1.68&weight=55">大雄的BMI</a></button>
<hr>
<?php

		echo "姓名:" . $names[$i] . "<br>";
		$height = $_GET["height"];
		$weight = $_GET["weight"];
		if ($height!=NULL and $weight!=NULL){//確定兩個子都不是空的
			//條件成立後才會執行部分
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
	} else {//如果有任何一個是空的
		echo "你要在網址列打上正確的資料才能計算!<hr>";
		echo "例如:http://127.0.0.1/mysite/nkust-0827/test07.php?height=你的身高&weight=你的體重";
	}
?>

