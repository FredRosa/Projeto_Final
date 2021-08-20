<?php

include("connect.php");

$email = $_POST['email'];
$pass = $_POST['pass'];
$pessoas = $_POST['pessoas'];
$contacto = $_POST['contacto'];
$horario = $_POST['horario'];
$data = $_POST['data'];



$query = "INSERT INTO reservas(email,pass,pessoas,contacto,horario,data) VALUES ('$email','$pass','$pessoas','$contacto','$horario', '$data')";
if (mysqli_query($conn, $query)){
    header('Location: '.$uri.'../index.html');
}
else{
    echo "Error Inserting record: " . $conn->error;
}

?>