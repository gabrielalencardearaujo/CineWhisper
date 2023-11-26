<?php
  include('./connectDB.php');
  session_start();

  $email = $conn->real_escape_string($_POST['email']); 
  $password = $_POST['password']; 
  $sql = "SELECT * FROM tb_users WHERE email = '$email'";
  $res = $conn->query($sql);

  if ($res) {
    $row = $res->fetch_object();
    if (password_verify($password, $row->password)) { 
      $_SESSION['authentication'] = 'sim';
      $_SESSION['User'] = $row->name;
      header('Location: ../../news.php');
      exit(); 
    }
  }

  $_SESSION['authentication'] = 'nao';
  $_SESSION['User'] = 'none';
  header('Location: ../../login.php?login=errorLogin');
  exit(); 

  $conn->close();
?>
