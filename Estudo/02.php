<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Seu nome " . $_SESSION["Nome"] . ".<br>";
echo "Seu Sobrenome " . $_SESSION["Sobrenome"] . ".<br>";
echo "Suas cores favoritas são" . $_SESSION["FavColor"] . ".";
?>

</body>
</html>