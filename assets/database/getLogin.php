<?php
  include('./connectDB.php');
  session_start();

  $email = $_POST['email'];
  $pass = md5($_POST['password']);
  $userValid = false;

  $sql = "SELECT * FROM tb_users WHERE tb_users.email = ".$email." AND ".$pass." = tb_users.password";

  $res = $conn->query(sql);
  $qtd = $res->num_rows;

  if(qtd > 0) {
    header('Location: ../../login.php?login=errorLogin');
  } else if(qtd == 1) {
    $userValid = true;
  } else {
    header('Location: ../../login.php?login=AlgoInesperadoAconteceu');
  };

  if(!$userValid) {
    $_SESSION['authentication'] = 'nao';
    $_SESSION['User'] = 'none';
    header('Location: ../../login.php?login=errorLogin');
  } else {
    $_SESSION['authentication'] = 'sim';
    $_SESSION['User'] = $email;
    header('Location: ../../news.php');
  }

  $conn->close();
