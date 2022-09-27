<html>
<head>
</head>
<body>
<?php
    for($count = 1; $count <= 6; ++$count)
    {
        for($count2 = 1; $count2 <= 5; ++$count2){
            if($count == 1 || $count == 6){
                echo "*";
            }
            elseif($count2 == 1 || $count2 == 5){
                echo "*";
            }
            else{
                echo "_";
            }
        }
        echo "<br>";
    }
?>
</body>
</html>