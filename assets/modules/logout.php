<?php
  session_start();

  $_SESSION['authentication'] = 'nao';
  header('Location: ../../login.php');
