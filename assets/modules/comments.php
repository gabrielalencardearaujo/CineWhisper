<?php
  include('../database/connectDB.php');

  $idPost = $_GET['post'];

  $sql = "SELECT * FROM db_cinewhisper.tb_comments 
  JOIN db_cinewhisper.tb_users ON tb_comments.id_user = tb_users.id_user
  WHERE tb_comments.id_post = ".$idPost;

  $res = $conn->query($sql);
  $qtd = $res->num_rows;

  print "<ul>";

  if($qtd == 0) {
  print "<p class=''>Sem Comentarios.</p>";
  } else {
    while($row = $res->fetch_Object()) {
      print "<li id='id_comment_".$row->id_comment."' >";
      print "<h4>". $row->name ."</h4>";
      print "<p>". $row->textComment ."</p>";
      print "
        <div class='btnLikes'><abbr title='Gostei'>
          <img class='like' src='./assets/img/btnLike.svg' alt='Botao de Like'>
        </abbr>
        <abbr title='Nao Gostei'>
          <img class='dislike' src='./assets/img/btnLike.svg' alt='Botao de Dislike'>
        </abbr>
        </div>
      ";
      print "<li>";
    }
  }

  $conn->close();

  // print "
  //   <li>
  //     <h4>Fulano de tal</h4>
  //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, voluptates. Exercitationem excepturi est nesciunt perspiciatis beatae. Cupiditate suscipit, placeat modi recusandae reiciendis eius itaque sed eveniet magnam amet architecto corrupti!
  //     </p>
  //     <div class='btnLikes'>
  //     <abbr title='Gostei'>
  //       <img class='like' src='./assets/img/btnLike.svg' alt='Botao de Like'>
  //     </abbr>
  //     <abbr title='Nao Gostei'>
  //       <img class='dislike' src='./assets/img/btnLike.svg' alt='Botao de Dislike'>
  //     </abbr>
  //     </div>
  //   </li>";
