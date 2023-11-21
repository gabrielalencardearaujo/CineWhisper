<?php 
  include('../database/connectDB.php');
  session_start();
  $userLogin = $_SESSION['User'];
  $textComment = $_POST['newComment'];

  $sql = "SELECT name, id_user FROM tb_users WHERE email = ".$userLogin;
  $res = $conn->query($sql);
  $row = $res->fetch_Object();

  if($_SESSION['authentication'] == 'sim' && $res == true) {
    $sql = "INSERT INTO tb_comments (comment, e_user, id_user, name) VALUES ($textComment, $userLogin, $row->id_user, $row->name)";
  } 

  $conn->close();
  