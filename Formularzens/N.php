<!DOCTYPE html>
    <head>
        <title>Formularz</title>
        <meta charset="utf-8">
    </head>
    <body>
	<div id="panel">
    <form method="post" action="./N.php">
        <label for="username">Nazwa użytkownika:</label><br>
        <input type="text" id="login" name="login"><br>
        <label for="password">Hasło:</label><br>
        <input type="password" id="password" name="password">
        <div id="lower">
        <p><input type="checkbox" name="zapis" value="" />zapisać hasło?</p>
		<input type="text" id="pseudonim" name="pseudonim" value="Wpisz pseudonim">
	<br>
	<br>
	<textarea id="Komentarz" name="Komentarz"
          rows="5" cols="33">
Komentarz
	</textarea>
	<br>
	<a href="O.php">Ankieta</a><br>
	<br>
	<br>
	<input type="submit" value="Login">
    </div>
    </form>
    </div>
    <?php
        if(isset($_POST['password']))
        echo "haslo to :";
        echo sha1('password');
		echo "<br>";
		echo "<br>";




		if(isset($_POST['login']))
        echo ("login to :" . $_POST['login']);
		
		echo "<br>";
		echo "<br>";
		
		if(isset($_POST['pseudonim']))
        echo ("pseudonim to :" . $_POST['pseudonim']);

		echo "<br>";
		echo "<br>";
		
		if(isset($_POST['Komentarz']))
        echo ("Komentarz: " . $_POST['Komentarz']);
		
		echo "<br>";
		echo "<br>";
		
        if(isset($_POST['zapis']))
        echo "Hało zostało zapisane" . $_POST['zapis'];
	
	
    ?>
    </body>
</html>