<html>
<head>
<title> PAI </title>
<meta charset="utf-8">

</head>
<body>
<form action="./formularz-text.php" method="POST">
	<p>Podaj imię:</p> 
       <p> <input type="text" name="imie"> </p>
	   <input type="submit">
</form>
	<?php
        if(isset($_POST['imie'])){
            echo "Cześć " . htmlspecialchars($_POST['imie']) . ". ";
        }else{
            echo "???";
        }
    ?>
<form action="./formularz-text.php" method="POST">
<p>Podaj płeć:</p> 
<p><input type="radio" name="plec" value="m">Mężczyzna</p>
<p><input type="radio" name="plec" value="k">Kobieta</p>
    <input type="submit">
</form>
    <?php
        if(isset($_POST['plec']))
		{
            if($_POST['plec'] == 'm') echo "Wybrana płeć: Mężczyzna";
            else echo "Wybrana płeć: Kobieta";
        }
    ?>
</body>
</html>