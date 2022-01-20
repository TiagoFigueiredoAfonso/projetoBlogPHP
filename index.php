<?php
    include_once("templates/header.php");
    
?>
    <main>
    <div id="title-container"> 
    <h1>Blog do Afonso</h1>
     <p>Acadêmico do 4º semestre - IFMS</p>
    </div>
    <div id="posts-container">
        <?php foreach($posts as $posts): ?>
            <div class="post-box">
                <!--vai na base de dados local, na pasta img, puxa imagens e os textos da variavel $post  <?= $BASE_URL ?>/ -->
                <img src="img/<?= $posts['img'] ?>" alt="<?= $posts['title']?>">
                <h2 class="posts-title">

                    <!--chamando o post aqui embaixo, está chamando no arquivo post em relação ao posts da pasta data -->
                    
                    <a href="<?= $BASE_URL ?>post.php?id=<?= $posts['id'] ?>"><?= $posts['title'] ?></a>

                    
                </h2>
                <p class="post-description"> <?= $posts['description'] ?></p>
               <div class="tags-container">
               <?php foreach($posts['tags'] as $tag): ?>
                    <a href="#"> <?= $tag ?> </a>
                <?php endforeach; ?> 
               </div>
            </div>
        <?php endforeach; ?>
    </div>
    </main>
<?php
    include_once("templates/footer.php");
?>

