<?php
include "admin/mydb.php";
$pochta = $_POST['mail'];
mail($pochta,'Subscribe!','Thank you for your subscription!');
header("Location: index.php");
?>