<?php

include("connect.php");

$db = mysqli_select_db($conn, 'insecta');

if(isset($_POST['delete']))
{
    $email = $_POST['email'];
    $query = "DELETE FROM `clientes` WHERE `email`='$email'";
    $query_run = mysqli_query($conn,$query);
    header("Location: clientes.php");    
}
$conn->close();
?>
