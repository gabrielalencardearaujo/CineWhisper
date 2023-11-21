<?php
  include('../database/connectDB.php');

  $sql = "SELECT * FROM tb_comments WHERE ";

  echo "<h3>Comentários</h3>
  <ul>
    <li>
      <h4>Fulano de tal</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, voluptates. Exercitationem excepturi est nesciunt perspiciatis beatae. Cupiditate suscipit, placeat modi recusandae reiciendis eius itaque sed eveniet magnam amet architecto corrupti!
      </p>
      <div class='btnLikes'>
      <abbr title='Gostei'>
        <img class='like' src='./assets/img/btnLike.svg' alt='Botao de Like'>
      </abbr>
      <abbr title='Nao Gostei'>
        <img class='dislike' src='./assets/img/btnLike.svg' alt='Botao de Dislike'>
      </abbr>
      </div>
    </li>";