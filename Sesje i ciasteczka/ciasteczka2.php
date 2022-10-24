<html>
<body>

<?php
$Destroy = setcookie("user", "", time() - 3600);
echo "Usunąć ciasteczko?";
?>
<input type="submit" name="Destroy" value="Destroy">

</body>
</html>