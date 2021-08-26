<html>
    <head>
    <meta name="viewport" content="width=device-width"> 
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

$sql = "SELECT * FROM reservas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>email</th><th>pessoas</th><th>contacto</th><th>data</th><th>horario</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["email"] . "</td> <td>" .$row["pessoas"] . "</td> <td>" . $row["contacto"] . "</td> <td>" . $row["data"] ."</td> <td>" . $row["horario"] ."</td>";
    
  }
  echo "</table> <br> <button onclick=document.location='../admin2.html'>voltar</button>";
} 
else {
  echo "Sem resultados";
}
$conn->close();

?>