<?php
    include_once("templates/header.php");

   /*/
    // verificar se existe algum post
    
    if(isset($_GET['id'])) {// checar se veio algo no GET

        $postId = $_GET['id']; // guardo na variável o id que veio no post
        $currentPost;

        //Agora, encontrar o post
        foreach($posts as $post) { 
            if($post['id'] == $postId) {//se o post id for igual ao post da url
                $currentPost = $post; //current post recebe o post, agora eu tenho acesso ao que veio
              }
        
        }
    }
    */

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;
    
        foreach($posts as $post) {

          if($post['id'] == $postId) {
            $currentPost = $post;
          }
        }
    
      }
    
    
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <!-- para imagem base url igual no index , mas troca a variavel-->
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae obcaecati consequuntur possimus deserunt repellendus id dolore, iure aliquam harum. Esse beatae nam laudantium modi libero quisquam, doloremque iste necessitatibus obcaecati.
            Obcaecati eligendi, aliquid, quaerat illum neque enim atque, aliquam non ipsam temporibus deleniti officiis! Veniam consequatur incidunt aperiam recusandae sit excepturi at, accusantium porro. Suscipit quae mollitia a dolorem. Veritatis.
            Neque provident delectus iusto tempora repellat magni, ullam laborum illo molestias labore, officia debitis voluptas ea voluptatum beatae aliquam nesciunt tempore impedit maxime, veritatis quas ipsum! Aperiam eius error dignissimos?
            Non adipisci tempore laboriosam illo maxime voluptatibus veritatis necessitatibus aperiam minima aut, labore veniam corrupti accusantium repellat error doloribus vero reprehenderit impedit quos quam eos! Maiores omnis alias impedit numquam.
            Provident ut eos sint, placeat quas perferendis unde ratione dicta excepturi distinctio accusamus voluptatem quia nostrum possimus veniam voluptatibus odio velit voluptate tempora atque ipsam ducimus. Nam iste ullam harum!Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae obcaecati consequuntur possimus deserunt repellendus id dolore, iure aliquam harum. Esse beatae nam laudantium modi libero quisquam, doloremque iste necessitatibus obcaecati.
            Obcaecati eligendi, aliquid, quaerat illum neque enim atque, aliquam non ipsam temporibus deleniti officiis! Veniam consequatur incidunt aperiam recusandae sit excepturi at, accusantium porro. Suscipit quae mollitia a dolorem. Veritatis.
            Neque provident delectus iusto tempora repellat magni, ullam laborum illo molestias labore, officia debitis voluptas ea voluptatum beatae aliquam nesciunt tempore impedit maxime, veritatis quas ipsum! Aperiam eius error dignissimos?
            Non adipisci tempore laboriosam illo maxime voluptatibus veritatis necessitatibus aperiam minima aut, labore veniam corrupti accusantium repellat error doloribus vero reprehenderit impedit quos quam eos! Maiores omnis alias impedit numquam.
            Provident ut eos sint, placeat quas perferendis unde ratione dicta excepturi distinctio accusamus voluptatem quia nostrum possimus veniam voluptatibus odio velit voluptate tempora atque ipsam ducimus. Nam iste ullam harum!</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <!-- copia o foreach do index, que já tem as tags -->
            <ul id="tag-list">
                <!-- trocar a variavel de novo, por currentPot-->
            <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"> <?= $tag ?> </a></li>
                <?php endforeach; ?> 
            </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
            
        </aside>
    
    </main>
<?php
    include_once("templates/footer.php");
?>