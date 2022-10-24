<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$Submit = session_destroy();
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite number is " . $_SESSION["favnumber"] . ".";
?>
<br>
<input type="submit" name="submit" value="Submit">

</body>
</html>