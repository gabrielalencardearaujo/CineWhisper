<?php 
  session_start();

  echo '<pre>';
  echo $_POST['newComment'] . '<br>';
  echo $_SESSION['User'];
  echo '<pre>';
  echo 'Comentario feito';