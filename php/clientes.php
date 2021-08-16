<html>

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
  echo "<table><tr><th>nome</th><th>email</th><th>newsletter</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["nome"] . $row["email"] . $row["newsletter"] . "</td><td>
    <form action='detail.php' method='post'>

        <input name='email' value='" . $row["email"] . "' hidden>

        <button type='submit' name='detail' value='detail'>Detalhes</button>
        </form>
        </td>
    </tr>";
  }
  echo "</table>";
} else {
  echo "Sem resultados";
}
$conn->close();

?>
