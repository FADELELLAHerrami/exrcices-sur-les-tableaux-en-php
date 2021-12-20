<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>tabMult</title>
</head>
<body>

	<!-- Solution: 1 -->

	<!-- <?php
	$cpt=1;
	echo"<table border=\"1\">";
	echo"<tr><td></td>";
	for($j=2; $j<10 ; $j++){
		echo "<td>$j</td>";
	}
	echo"</tr>";
	for ($i=2; $i<10 ; $i++) {
		echo "<tr>";
		for($j=1; $j<10 ; $j++){
		echo "<td>";
		echo($i*$j) ;
		echo "</td>";
		}
		echo "</tr>";
	}
	echo"<table>";
?> -->
	<!-- Solution: 2 -->
	<?php
	$tm = array();
	for ($i=0; $i<9; $i++) {
	for ($j=0; $j<9; $j++) {
		$tm[$i][$j]=($i*$j);
	}
}
	echo '<table border=\"1\"><tbody>';
for ($i=0; $i<9; $i++) {
	echo '<tr>';
	for ($j=0; $j<9; $j++) {
	    echo '<td style="text-align:center">'
                 .$tm[$i][$j]
                 .'</td>';
	}
	echo '</tr>';
}
echo '</tbody></table>';

	?>
</body>
</html>