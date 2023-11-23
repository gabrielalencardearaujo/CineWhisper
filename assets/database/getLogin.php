<?php
  include('./connectDB.php');
  session_start();

  $email = $_POST['email'];
  $pass = md5($_POST['password']);
  $userValid = false;

  $sql = "SELECT * FROM tb_users WHERE tb_users.email = ".$email." AND tb_users.password = ".$pass;

  $res = $conn->query(sql);
  $qtd = $res->num_rows;

  if(qtd == 1) {
    $row = $res->fetch_Object();
    $_SESSION['authentication'] = 'sim';
    $_SESSION['name'] = $row->name;
    header('Location: ../../news.php');
  } else {
    $_SESSION['authentication'] = 'nao';
    $_SESSION['name'] = 'none';
    header('Location: ../../login.php?login=errorLogin');
  };

  $conn->close();
