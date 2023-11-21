<?php 
  include('./connectDB.php');
  session_start();

  $form = $_POST;
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $selectSQL = "SELECT * FROM tb_users WHERE $email = tb_users.email"; 
  $resSelect = $conn->query($selectSQL);

  $qtd = $resSelect->num_rows;

  if($qtd > 0) {
    header('Location: ../../index.php?register=UserExist');
  }

  $_SESSION['User'] = $name;

  $insertSQL = "INSERT INTO tb_users (name, email, password) VALUES ('{$name}', '{$email}', '{$password}')";

  $resInsert = $conn->query($insertSQL);

  if($resInsert == true) {
    header('Location: ../../sendForm.php');
  } else {
    header('Location: ../../index.php?register=ErrorRegister');
  }

?>
