<?php
    $książka[] = "Diuna";
	$książka[] = "Metro 2033";
	$książka[] = "Wiedźmin";

	for($i = 2; $i >= 0; --$i){
		echo "$i: $książka[$i] <br>";
	}
	
	echo "<hr>";
	
    $gra = array('Terraria' => "Kopanie",
	'Cyberpunk' => "Strzelanie",
	'Sea of Thieves' => "Pływanie");
	
    $a = 0;
	
    foreach($gra as $item => $description){
        echo "$item: $description <br>";
        ++$a;
    }
?>

