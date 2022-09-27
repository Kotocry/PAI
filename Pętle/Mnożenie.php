<html>
<head>
</head>
<body>
<?php
	for($count = 1; $count <= 10; ++$count)
    {
        for($count2 = 1; $count2 <= 10; ++$count2){
            $wynik = $count * $count2;
			echo $count, " * ", $count2, " = ", $wynik, "<br>";
        }
        echo "<br>";
    }
?>
</body>
</html>