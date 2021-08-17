<html>

    <body>

        <button onclick="document.location='criar.html'">Criar</button>

        <br>

    </body>

</html>

<?php

include("connect.php");

$sql = "SELECT * FROM menu_jantar";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ementa</th><th>preço</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["ementa"]."</td><td>".$row["preço"] . "</td><td> 
    <form action='detail.php' method='post'>
        <input name='id' value='" . $row["id"] . "' hidden>

            <button type='submit' name='update' value='update'>Editar</button>

        </form>

        </td>

        <td>

        <form action='delete.php' method='post'>

            <input name='id' value='" . $row["id"] ."' hidden>

            <button type='submit' name='delete' value='delete'>Eliminar</button>

        </form>

        </td>

    </tr>";
  }
  echo "</table>";
} else {
  echo "Sem resultados";
}
$conn->close();