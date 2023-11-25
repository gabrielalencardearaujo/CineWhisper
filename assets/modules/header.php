<?php 
  session_start();
?>

<header>
    <div class="container divHeader">
      <div class="logo">
        <a href="./news.php">
          <p><span class="detailsColor">C</span>ine<span class="detailsColor">W</span>hisper</p>
        </a>
      </div>
      <ul>
        <li>
          <a href="./news.php">Notícias</a>
        </li>
        <li>
          <a href="">Filmes</a>
        </li>
        <li>
          <a href="">Séries</a>
        </li>
        <li>
          <?php 
            if($_SESSION['authentication'] && $_SESSION['authentication'] == 'nao') {
              include('./assets/modules/btnLogin.php');
            } else {
              include('./assets/modules/btnLogout.php');
            }
          ?>
        </li>
      </ul>
    </div>
  </header>