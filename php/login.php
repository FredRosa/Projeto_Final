<?php
  
  include_once('connect.php');
  
  $email = $_POST["email"];
  $password = $_POST["password"];
  $id=$_POST["id"];
  $query = mysqli_query($conn, "SELECT * FROM administrador WHERE $id='id'");
   
          
  if(($result = mysqli_fetch_array($query)) && ($email = $result['email']) && ($password = $result['pass'])) {
      header('Location: '.$uri.'../admin2.html');
  }
  else {
          echo "<script language='javascript'>";
          echo "alert('Email ou password incorrectas')";
          echo "</script>";
          die();
  }
      
  ?>