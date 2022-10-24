<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["favcolor"] = "green";
$_SESSION["favnumber"] = "4";
echo "Session variables are set.";
?>

</body>
</html>