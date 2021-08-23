<html>
    <head>
    <style type="text/css">
        table {
        margin: 8px;
        }

        th {
        font-family: Arial, Helvetica, sans-serif;
        font-size: .7em;
        background: #658062;
        color: #FFF;
        padding: 2px 6px;
        border-collapse: separate;
        border: 1px solid #000;
        }

        td {
          font-family: Arial, Helvetica, sans-serif;
          font-size: 1em;
          border: 1px solid;
          color: #658062;

        }

        button {
          color: white;
          background-color: #658062;
          border-color: #658062;
          margin-left: 20px;
          margin-right: 20px;
          margin-top: 17px;
        }

        button:hover {
          color: rgb(255, 255, 255);
          background-color: #55BF49;;
          border-color: #55BF49;;
        }

</style>
    </head>

</html>

<?php

include("connect.php");

$sql = "SELECT * FROM especialidades";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ementa</th><th>preço</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["ementa"]."</td><td>".$row["preço"] . "</td></tr>";
  }
  echo "</table> <br> <button onclick=document.location='../admin2.html'>voltar</button>";
} else {
  echo "Sem resultados";
}
$conn->close();

?>