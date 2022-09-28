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
	
	echo "<hr>";
	
	$products = array(
                'paper' => array(
                    'copier' => "Do kserokopiarek i uniwersalny",
                    'inkjet' => "Do drukarek atramentowych",
                    'laser' => "Do drukarek laserowych",
                    'photo' => "Papier fotograficzny"),
                'pens' => array(
                    'ball' => "Długopisy",
                    'hilite' => "Markery przezroczyste",
                    'marker' => "Markery zwykłe"),
                'misc' => array(
                    'tape' => "Taśmy klejące",
                    'glue' => "Kleje",
                    'clips' => "Spinacze")
                );
            echo "<pre>";
                    echo $products['paper']['copier'];
					echo "<br>";
					echo $products['pens']['ball'];
					echo "<br>";
					echo $products['misc']['tape'];
            echo "</pre>";   

		echo "<hr>";

	$chessboard = array(
        array('w','s','g','h','k','g','s','w'),
        array('p','p','p','p','p','p','p','p'),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array('P','P','P','P','P','P','P','P'),
        array('W','S','G','H','K','G','S','W'),
    );
    echo "<pre>";
	$chessboard[6][3] = ' ';
	$chessboard[4][3] = 'P';
    foreach($chessboard as $row) 
    {
        foreach($row as $piece)
            echo "$piece ";
        echo "<br>";
    }
    echo "</pre>";		
?>

