<?php
  define('HOST', 'localhost'); 
  define('USER', 'root');        
  define('PASSWORD', 'biel123');
  define('BASE', 'db_cinewhisper');            

  $conn = new mysqli(HOST, USER, PASSWORD, BASE);
  
  echo $conn;

  if (!$conn) {  
    die("Falha de conexão: " . mysqli_connect_error());
  }

  echo "Conexão bem sucedida!";
