<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
   </head>
    <form method="post" action="./O.php")>
    <body>
<br><center><a href="N.php">Formularz </a>
<br>
<br>
<br>
Wybierz egzamin
<br>
<br>
<select name="lista">
  <option>Egzamin 1</option>
  <option>Egzamin 2</option>
  <option>Egzamin 3</option>
</select>
<br>
<br>
Ile egzaminów chcesz zdawać?
<br>
<br>
<input name="zapis1" type="radio">1

<input name="zapis2" type="radio">2

<input name="zapis3" type="radio">3<br></center>
<hr><center>
<input type="checkbox" name="zapis" id="zazn" checked>
<label for="zazn">Akceptuję regulamin</label>



<input type="checkbox" name="zapis" id="zazn" checked="checked">
<label for="zazn">NIE</label>



<input type="checkbox" name="zapis" id="zazn" checked="on">
<label for="zazn">Jutro</label> </center>



<method="post" action="./O.php")>
    <input type="submit"/>
    </form><br><br>
<?php
	if(isset($_POST['zapis1']))
        echo "Wyrales opcje: ";
		echo "<br>";
		echo "<br>";




if(isset($_POST['zapis1']))
echo "Opcja :";
echo ('zapis1');




if(isset($_POST['zapis']))
echo "Zapis" . $_POST['zapis'];
?>        
    </body>
</html>