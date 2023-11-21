<?php include_once "./assets/modules/head.php" ?>
</head>

<body class="cadastro">
  <?php include_once "./assets/modules/header.php" ?>

  <section class="containerForm">
    <p><span class="detailsColor">Cine Whisper</span> é sua newsletter semanal de cinema, entregando análises de filmes,
      recomendações, notícias e curiosidades diretamente na sua caixa de entrada. Feita para os apaixonados por cinema
      que desejam se manter atualizados e descobrir os melhores filmes. Cadastre-se já e fique por dentro do universo
      cinematográfico a cada edição.</p>
    <form id="formSignUp" action="./assets/database/getRegister.php" method="POST">
      <div>
        <label for="name">Nome:</label>
        <input id="name" type="text" name="name" placeholder="Seu nome" required>
        <div class="msgError"></div>
      </div>
      <div>
        <label for="email">Email:</label>
        <input id="email" type="text" name="email" placeholder="seu.email@email.com">
        <div class="msgError"></div>
      </div>
      <div>
        <label for="password">Senha:</label>
        <input id="password" type="password" name="password" placeholder="Digite uma senha">
        <div class="msgError"></div>
      </div>
      <div>
        <label for="confPassword">Confirma Senha:</label>
        <div>
          <input id="confPassword" type="password" name="confPassword" placeholder="Confirme sua senha">
          <div class="msgError"></div>

          <svg class="eyePassword" xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          <path
            d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
          </svg>
        </div>

      </div>

      <div class="divButtons">
        <p>Já tem uma conta? Faça o <a href="./login.php">Login</a>.</p>
        <button type="submit">
          Cadastrar
          <svg width="29" height="19" viewBox="0 0 29 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 9.05322H27M27 9.05322L20.5 1.55322M27 9.05322L20.5 16.5532" stroke="white" stroke-width="3"
              stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>

    </form>
  </section>

  <?php include_once "./assets/modules/backGround.php" ?>

  <script src="./assets/js/main.js"></script>
</body>

</html>