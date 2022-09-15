<html>
	<head>
		<meta charset="utf-8">
		<title>Gud stronica</title>
	</head>
	<body>
	<?php
	/*$zmienna = 45;
	if($zmienna <= 39)
		{
		echo "hello";
		}
	elseif($zmienna >= 40 && $zmienna >=54)
		{
		echo "hw";
		}
	elseif($zmienna >=55 && $zmienna >=69)
		{
		echo "hvw";
		}
	elseif($zmienna >=70 && $zmienna >=85)
		{
		echo "haw";
		}
	elseif($zmienna >=86 && $zmienna >=100)
		{
		echo "hww";
		}
	*/   
		$biblioteka = 5;
		$Ksiazka_1 = 1;
		$Ksiazka_2 = 2;
		$Ksiazka_3 = 3;
		$Ksiazka_4 = 4;
		$Ksiazka_5 = 5;
	    switch($biblioteka)
    {
        case 1:
            echo "Wybrałeś ksiazke 1";
            break;
        case 2:
            echo "Wybrałeś ksiazke 2";
            break;
        case 3:
            echo "Wybrałeś ksiazke 3";
            break;
        case 4:
            echo "Wybrałeś ksiazke 4";
            break;
        case 5:
            echo "Wybrałeś ksiazke 5";
    }
	?>
	</body>
</html>