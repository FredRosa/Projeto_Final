<?php
  
  include('connect.php');
  
  $result = mysqli_query($conn, "SELECT * FROM administrador WHERE email='" . $_POST["email"] . "'
  and pass = '" . $_POST["password"] ."'");
  $row = mysqli_fetch_array($result);
  if(is_array($row)) {
    header('Location: '.$uri.'../admin2.html');
  }   

  else {
      echo "Email ou Password invalida!";

  }

  ?>