<?php include_once "./assets/modules/head.php" ?>
  <link rel="stylesheet" href="./assets/css/news.css">
  <link rel="stylesheet" href="./assets/css/newsPage.css">
</head>

<body>
  <?php include_once "./assets/modules/header.php" ?>

  <section class='content'>
    <article>
      <h2>Aquaman 2 | James Wan desmente boatos sobre refilmagens: "não é realidade</h2>
      <sup>Autor: Fulano de Tal.</sup>
    </article>
    <p>
      <img src="./assets/img/aquamanNews.jpeg" alt="">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere similique aliquam omnis doloribus reprehenderit pariatur maiores dolorem, alias quidem impedit, magnam officiis nostrum neque molestias cupiditate vero distinctio, nam numquam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, sint necessitatibus! Officia animi at aliquam, natus dignissimos esse suscipit aliquid quia, et voluptate eaque consequuntur libero tempore quae vero.
      <br>
      <br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum totam aliquam a repudiandae beatae fuga velit quae ad qui, sunt placeat ipsa alias nulla, tempore aperiam quam et similique ab? Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias sequi maxime enim praesentium, cumque, tempore quis illo sit vero rem laudantium dolores laborum nulla omnis fuga saepe autem nobis maiores? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores officia neque velit eum voluptate saepe ad magni nulla exercitationem asperiores vitae, rem deserunt quod nemo inventore voluptatum praesentium, vel reiciendis.
      <br>
      <br>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, sit. Sunt voluptatem minima laborum quas consequuntur, facere, veniam laudantium quidem suscipit voluptates magnam perferendis ducimus illo nulla consectetur necessitatibus exercitationem.
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere similique aliquam omnis doloribus reprehenderit pariatur maiores dolorem, alias quidem impedit, magnam officiis nostrum neque molestias cupiditate vero distinctio, nam numquam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, sint necessitatibus! Officia animi at aliquam, natus dignissimos esse suscipit aliquid quia, et voluptate eaque consequuntur libero tempore quae vero.
      <br>
      <br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum totam aliquam a repudiandae beatae fuga velit quae ad qui, sunt placeat ipsa alias nulla, tempore aperiam quam et similique ab? Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias sequi maxime enim praesentium, cumque, tempore quis illo sit vero rem laudantium dolores laborum nulla omnis fuga saepe autem nobis maiores? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores officia neque velit eum voluptate saepe ad magni nulla exercitationem asperiores vitae, rem deserunt quod nemo inventore voluptatum praesentium, vel reiciendis.
      <br>
      <br>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, sit. Sunt voluptatem minima laborum quas consequuntur, facere, veniam laudantium quidem suscipit voluptates magnam perferendis ducimus illo nulla consectetur necessitatibus exercitationem.
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere similique aliquam omnis doloribus reprehenderit pariatur maiores dolorem, alias quidem impedit, magnam officiis nostrum neque molestias cupiditate vero distinctio, nam numquam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, sint necessitatibus! Officia animi at aliquam, natus dignissimos esse suscipit aliquid quia, et voluptate eaque consequuntur libero tempore quae vero.
      <br>
      <br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum totam aliquam a repudiandae beatae fuga velit quae ad qui, sunt placeat ipsa alias nulla, tempore aperiam quam et similique ab? Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias sequi maxime enim praesentium, cumque, tempore quis illo sit vero rem laudantium dolores laborum nulla omnis fuga saepe autem nobis maiores? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores officia neque velit eum voluptate saepe ad magni nulla exercitationem asperiores vitae, rem deserunt quod nemo inventore voluptatum praesentium, vel reiciendis.
      <br>
      <br>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, sit. Sunt voluptatem minima laborum quas consequuntur, facere, veniam laudantium quidem suscipit voluptates magnam perferendis ducimus illo nulla consectetur necessitatibus exercitationem.
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere similique aliquam omnis doloribus reprehenderit pariatur maiores dolorem, alias quidem impedit, magnam officiis nostrum neque molestias cupiditate vero distinctio, nam numquam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, sint necessitatibus! Officia animi at aliquam, natus dignissimos esse suscipit aliquid quia, et voluptate eaque consequuntur libero tempore quae vero.
      <br>
      <br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum totam aliquam a repudiandae beatae fuga velit quae ad qui, sunt placeat ipsa alias nulla, tempore aperiam quam et similique ab? Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias sequi maxime enim praesentium, cumque, tempore quis illo sit vero rem laudantium dolores laborum nulla omnis fuga saepe autem nobis maiores? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores officia neque velit eum voluptate saepe ad magni nulla exercitationem asperiores vitae, rem deserunt quod nemo inventore voluptatum praesentium, vel reiciendis.
      <br>
      <br>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, sit. Sunt voluptatem minima laborum quas consequuntur, facere, veniam laudantium quidem suscipit voluptates magnam perferendis ducimus illo nulla consectetur necessitatibus exercitationem.
    </p>
  </section>

  <hr>

  <section class='containerComments'>
    <h3>Comentários</h3>
    <ul>
      <?php
        include('./assets/modules/comments.php');
      ?>
    </ul>

    <div class="newComment">
      <h3>Novo Comentario</h3>
      <form action="./assets/modules/getNewComment.php" method='POST' >
        <input type="text" name='id_post' value='1' style="display: none;">;
       
        <textarea name="newComment" ></textarea>
        <div class="divButtons">
          <button type="submit">
            Enviar
          </button>
        </div>
      </form>
    </div>
  </section>

  <?php include_once "./assets/modules/footer.php" ?>

</body>
</html>
