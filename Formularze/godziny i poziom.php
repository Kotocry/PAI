<html>
<head>
</head>
<body>
<form action="./godziny i poziom.php" method="POST">
<p>Wybierz grę:</p>
<select name="gry">
	<option value="...">...</option>
    <option value="CS">CS</option>
    <option value="GTA">GTA</option>
    <option value="OV">OV</option>
</select>
<p>Ilość godzin w grze:</p>
<p><input type="number" value="czas"></p>
<p><input type="submit"></p>


<?php
if(isset($_POST['czas']))
{
	if($_POST['czas'] <= 100) echo "Masz do 100 godzin w tej grze";
	else if($_POST['czas'] <= 300) echo "Masz 300 lub mniej godzin w grze";
	echo "<br>";
}
?>
</body>
<html>