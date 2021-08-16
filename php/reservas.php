<html>

    <body>

        <button onclick="document.location='../admin2.html'">voltar</button>

        <br>

    </body>

</html>

<?php

include("connect.php");

$sql = "SELECT * FROM reservas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>email</th><th>pessoas</th><th>contacto</th><th>horario</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["email"] . $row["pessoas"] . $row["telemovel"] . $row["horario"] ."</td><td>
    
  }
  echo "</table>";
} else {
  echo "Sem resultados";
}
$conn->close();

?>