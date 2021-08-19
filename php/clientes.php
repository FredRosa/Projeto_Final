<html>
    <head>
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>

        <button onclick="document.location='../admin2.html'">voltar</button>

        <br>

    </body>

</html>

<?php

include("connect.php");

$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table style='background-color:white'><tr><th>nome</th><th>email</th><th>contacto</th><th>morada</th><th>newsletter</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td id='tabela_admin'>".$row["nome"] ."</td> <td>" . $row["email"] . "</td> <td>" . $row["contacto"] . "</td> <td>". $row["morada"] . "</td> <td>". $row["newsletter"] . "</td><td>
    <form action='delete.php' method='post'>

    <input name='email' value='" . $row["email"] ."' hidden>

    <button type='submit' name='delete' value='delete'>Delete</button>

</form>
    </tr>";
  }
  echo "</table>";
} else {
  echo "Sem resultados";
}
$conn->close();

?>
