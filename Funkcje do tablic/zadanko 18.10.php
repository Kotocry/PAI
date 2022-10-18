 <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
	<form action="./zadanko 18.10.php" method="POST">
	<p>Podaj imię:</p> 
		<p> <input type="text" name="imie"> </p>
		<input type="submit">
	<p>Podaj swój wiek:</p>
		<p> <input type="number" name="wiek"> </p>
		<input type="submit">
	</form>
	<?php
		$tablica1 = array("orange", "banana");
		array_push($tablica1, "imie", "wiek");
		print_r($tablica1);
	?>
    </body>
</html>