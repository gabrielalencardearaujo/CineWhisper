<?php
  // include('./connectDB.php');

  session_start();

  $login = $_POST;
  $checked = false;

  $checked = true;
  if(!$checked) {
    $_SESSION['authentication'] = 'nao';
    $_SESSION['User'] = 'none';
    header('Location: ../../login.php?login=errorLogin');
  } else {
    $_SESSION['authentication'] = 'sim';
    $_SESSION['User'] = $_POST['email'];
    header('Location: ../../news.php');
  }