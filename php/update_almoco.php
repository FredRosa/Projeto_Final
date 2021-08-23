<?php

include("connect.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];

mysqli_query($conn, "UPDATE escola SET nome='$nome',idade='$idade' WHERE id=$id");
header("Location: tabela.php");

$conn->close();

?>