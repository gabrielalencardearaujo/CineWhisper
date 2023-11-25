<?php include_once "./assets/modules/head.php" ?>

<body class="login">
  <?php include_once "./assets/modules/header.php" ?>

  <section class="containerForm">
    <p style="font-size: 32px;">Faça seu <span class="detailsColor">login.</span></p>
    <form id="formSignUp" action="./assets/database/getLogin.php" method="POST">
        <div>
          <label for="email">Email:</label>
          <input id="email" type="text" name="email" placeholder="seu.email@email.com">
        </div>
        <div>
          <label for="password">Senha:</label>
          <input id="password" type="text" name="password" placeholder="Digite uma senha">
        </div>
       
          <?php
            if($_GET['login'] && $_GET['login'] == 'errorLogin') { ?>
              <div class="msgError">Usuario ou Senha invalidos.</div>
          <?php }?>
          
      <div class="divButtons">
        <div class="signUp">
          <p>Clique <a href="./index.php">AQUI</a> e cadastre-se.</p>
        </div>

        <button type="submit">
          Login
          <svg width="29" height="19" viewBox="0 0 29 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 9.05322H27M27 9.05322L20.5 1.55322M27 9.05322L20.5 16.5532" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>
    </form>
  </section>

  <?php include_once "./assets/modules/backGround.php" ?>

</body>
</html>