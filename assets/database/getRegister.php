<?php 
  include('./connectDB.php');
  session_start();

  $form = $_POST;
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  
  $selectSQL = "SELECT * FROM tb_users WHERE tb_users.email = ".$email; 
  $resSelect = $conn->query($selectSQL);

  $qtd = $resSelect->num_rows;

  if($qtd > 0) {
    header('Location: ../../index.php?register=UserExist');
  }

  $insertSQL = "INSERT INTO tb_users (name, email, password) VALUES ('{$name}', '{$email}', '{$password}')";

  $resInsert = $conn->query($insertSQL);

  if($resInsert == true) {
    $_SESSION['authentication'] = 'sim';
    $_SESSION['User'] = $email;
    header('Location: ../../sendForm.php');
  } else {
    header('Location: ../../index.php?register=ErrorRegister');
  }

  $conn->close();

?>
