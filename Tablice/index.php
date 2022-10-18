<html>
<head>
</head>
<body>
</body>
</html>

<?php
	
	$number = array(5, 14, 20, 30, 36, 74, 12, 43, 55, 78);
	print_r($number) . "<br>";
	echo "<br>"; echo "<br>";
	echo count ($number);
	echo "<br>";
	sort($number);
	echo "<br>"; echo "<br>";
	$arrlength = count($number);
	for($x = 0; $x < $arrlength; $x++) {
    echo $number[$x];
    echo "<br>";
	
}
	
	
    $temp = explode(' ', "ty no chyba nie wiem");
    print_r($temp);
	echo "<br>"; echo "<br>";
	
	echo count ($temp);
	echo "<br>";
	
	sort($temp);
	echo "<br>"; echo "<br>";
	$arrlength = count($temp);
	for($x = 0; $x < $arrlength; $x++) {
    echo $temp[$x];
    echo "<br>";
}
	echo "<br>";
	for ($z = 0; $z <= 4; $z++) {
	echo $number[$z];
	echo $temp[$z] . " ";
}
?>