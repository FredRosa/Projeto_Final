<?php

include("connect.php");

$id = $_POST['id'];
$ementa = $_POST['ementa'];
$preco = $_POST['preço'];

mysqli_query($conn, "UPDATE menu_almoco SET ementa='$ementa',preço='$preco' WHERE id=$id");
header("Location: menu_almoco.php");

$conn->close();

?>