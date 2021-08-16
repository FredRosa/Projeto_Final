<?php

include("connect.php");

$email=$_POST['email'];

$query = mysqli_query($conn, "SELECT * FROM clientes WHERE email=$email");
while($result = mysqli_fetch_array($query)){
    $nome = $result['nome'];
    $email = $result['email'];
    $password = $result['password_reg'];
    $contacto = $result['phone'];
    $morada = $result['morada'];
    $newsletter = $result['newsletter'];
}
echo "<h1>Detalhes do Cliente</h1>" . "NOME: " . $nome . "<br>EMAIL: " . $email . "<br>PASSWORD: " . $password . "<br>CONTACTO: " . $contacto . "<br>MORADA: " . $morada . "<br>NEWSLETTER: " . $newsletter

"<br><br><td>
<form action='delete.php' method='post'>

    <input name='email' value='" . $row["email"] ."' hidden>

    <button type='submit' name='delete' value='delete'>Delete</button>

</form>
</td>";

?>