<?php 
  include('../database/connectDB.php');
  session_start();
  $userLogin = $_SESSION['User'];
  $textComment = $_POST['newComment'];
  $id_post = $_POST['id_post'];

  $sql = "SELECT name, id_user FROM tb_users WHERE email = ".$userLogin;
  $res = $conn->query($sql);
  $row = $res->fetch_Object();

  if($_SESSION['authentication'] == 'sim' && $res == true) {
    $sql2 = "INSERT INTO tb_comments (textComment, id_user, id_post) VALUES ($textComment, $row->id_user, $id_post)";
    $res2 = $conn->query($sql2);
  } 

  $conn->close();
  
