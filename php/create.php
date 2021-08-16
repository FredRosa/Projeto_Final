<?php

include("connect.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$password= $_POST['password_reg'];
$contacto = $_POST['phone'];
$morada = $_POST['morada'];
$newsletter = $_POST['newsletter'];



$query = "INSERT INTO clientes(nome,email,password,contacto,morada,newsletter) VALUES ('$nome','$email', '$password','$contacto', '$morada','$newsletter')";
if (mysqli_query($conn, $query)){
    header('Location: '.$uri.'clientes.php');
}
else{
    echo "Error Inserting record: " . $conn->error;
}

?>