<?php
  define('HOST', 'localhost'); 
  define('USER', 'root');        
  define('PASSWORD', '');
  define('BASE', 'somativa2_web');            

  $conn = new mysqli(HOST, USER, PASSWORD, BASE);
  
  echo $conn;

  if (!$conn) {  
    die("Falha de conexão: " . mysqli_connect_error());
  }

  echo "Conexão bem sucedida!";
