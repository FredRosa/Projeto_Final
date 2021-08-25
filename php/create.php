<?php

include("connect.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$password= $_POST['password'];
$password2 = $_POST['password_confirm'];
$contacto = $_POST['telemovel'];
$morada = $_POST['morada'];
$newsletter = $_POST['newsletter'];


$emailDB = mysqli_query($conn, "SELECT email FROM clientes");
$row = mysqli_fetch_array($emailDB);

if (is_array($row)) {

    echo
    "<script>     
    alert('Email já registado');
    window.location.replace('../index.php#registo');
    </script>";

}

if ($password != $password2){
    echo
    "<script>     
    alert('Passwords não coincidem.');
    window.location.replace('../index.php#registo');
    </script>";
}

else {
    
    $query = "INSERT INTO clientes(nome,email,pass,contacto,morada,newsletter) VALUES ('$nome','$email', '$password','$contacto', '$morada','$newsletter')";
    if (mysqli_query($conn, $query)){
        header('Location: '.$uri.'../index.php#registo');
    }
    else{
        echo "Error Inserting record: " . $conn->error;
    }
}

$conn->close();

?>