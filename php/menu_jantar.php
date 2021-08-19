<html>
    <head>
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>

        <button onclick="document.location='../admin2.html'">Voltar</button>

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
    echo "<tr><td>".$row["ementa"]."</td><td>".$row["preço"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "Sem resultados";
}
$conn->close();