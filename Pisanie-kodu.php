<?php
session_start();
?>
<html>
<head>
<title> PAI </title>
<meta charset="utf-8">
</head>
<body>
<form action="./Pisanie-kodu.php" method="POST">
	<p>Podaj imię:</p> 
       <p> <input type="text" name="imie"> </p>
	<p>Podaj hasło:</p> 
       <p> <input type="number" name="hasło"> </p>
	   <input type="submit" name="submit" value="Zatwierdź">
</form>
<?php
    if(isset($_POST['submit'])){
	$imie = $_POST['imie'];
	$hasło = $_POST['hasło'];
	
	$_SESSION['imie'] = $imie;
	$_SESSION['hasło'] = $hasło;
	
	echo "imie: ".$_SESSION['imie']."<br>";
	echo "hasło: ".$_SESSION['hasło']."<br>";
	
	echo "Hasło w sha1: ".sha1($_SESSION['hasło']);
}
?>
</form>
</body>
</html>