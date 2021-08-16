<?php

include("connect.php");

$email = $_POST['email'];
$pessoas = $_POST['pessoas']
$contacto = $_POST['telemovel'];
$horario = $_POST['horario'];



$query = "INSERT INTO reservas(email,pessoas,contacto,horario) VALUES ('$email','$pessoas','$contacto', '$horario')";
if (mysqli_query($conn, $query)){
    header('Location: '.$uri.'../index.html');
}
else{
    echo "Error Inserting record: " . $conn->error;
}

?>