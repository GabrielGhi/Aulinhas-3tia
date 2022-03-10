<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["Nome"] = "Gabriel";
$_SESSION["Sobrenome"] = "Ghiraldelli";
$_SESSION["FavColor"] = "Preto, Vermelho, Branco e Verde";
echo "Session variables are set.";
?>

</body>
</html>