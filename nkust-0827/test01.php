<button type=button><a href="index.php">回首頁</a></button>
<?php
	echo "<table width=300>";
	echo "<tr bgcolor=#ccffcc><td>i</td><td>i**2</td><td>i**3</td></tr>";
	for($i=1; $i<=9; $i++) {
		if ($i%2){
			echo "<tr bgcolor=#ccffff>";
		}
		else    {
			echo "<tr bgcolor=#ffcccc>";
		}
		echo "<tr bgcolor=#ccffff>";
		echo "<td>$i</td><td>". $i**2 .
			"</td><td>".$i**3 ."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>