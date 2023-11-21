<?php
  // include('./connectDB.php');

  session_start();

  $login = $_POST;
  $checked = false;

  $checked = true;
  if(!$checked) {
    $_SESSION['authentication'] = 'nao';
    header('Location: ../../login.php?login=errorLogin');
  } else {
    $_SESSION['authentication'] = 'sim';
    header('Location: ../../news.php');
  }

  echo $_SESSION['authentication'];