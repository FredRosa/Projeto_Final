<?php

include("connect.php");

$email=$_POST['email'];

$query = "DELETE * FROM clientes WHERE email=$email";

mysqli_query($conn, $query);
header("Location: clientes.php");

$conn->close();

?>
