<?php 
  include('./connectDB.php');

  session_start();

  // $_SESSION['']

  $form = $_POST;

  echo '<pre>';
  echo $form['name'] . '<br>';
  echo $form['email'] . '<br>';
  echo $form['password'];
  echo '</pre>';
  echo '<hr>';
?>
