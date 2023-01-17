<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;
        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>
    <main class="post-container">
        <div class="content-container">
            <h1 id="main-title"><? $currentPost['title'] ?></h1>
            <p id="post-description"><? $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?=$BASE_URL ?>/img/<? $currentPost['img'] ?>" alt="<? $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae aspernatur optio illum impedit fugiat eveniet reprehenderit cupiditate consequuntur distinctio, molestias nesciunt, nihil dolor. Ipsam, repellendus cumque aliquam inventore vero totam.
            At ab nulla, aliquam quasi id soluta laudantium reiciendis error ullam. Obcaecati dignissimos provident numquam commodi eaque! Unde voluptas, labore sapiente cupiditate assumenda aperiam. Molestiae debitis voluptates commodi reiciendis voluptatibus!
            Iusto quas culpa animi est blanditiis iste officiis minus. Beatae aspernatur fuga voluptatum sed cumque natus et dignissimos deserunt, doloribus repellat eius temporibus rerum eaque, incidunt architecto itaque rem pariatur.
            Vel, eius. Repellat numquam, aliquid dolorem dolores laborum iure, nostrum iste facilis rerum veritatis consectetur accusamus eos fuga incidunt magni et pariatur nam sapiente ipsa amet impedit! Quia, dolores eum?
            Animi, veniam. Officiis dolore deserunt voluptatum omnis libero quasi perspiciatis debitis quam est deleniti labore itaque necessitatibus suscipit delectus cupiditate ipsam consequuntur quis distinctio, corrupti magnam pariatur ratione! Totam, explicabo?</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae aspernatur optio illum impedit fugiat eveniet reprehenderit cupiditate consequuntur distinctio, molestias nesciunt, nihil dolor. Ipsam, repellendus cumque aliquam inventore vero totam.
            At ab nulla, aliquam quasi id soluta laudantium reiciendis error ullam. Obcaecati dignissimos provident numquam commodi eaque! Unde voluptas, labore sapiente cupiditate assumenda aperiam. Molestiae debitis voluptates commodi reiciendis voluptatibus!
            Iusto quas culpa animi est blanditiis iste officiis minus. Beatae aspernatur fuga voluptatum sed cumque natus et dignissimos deserunt, doloribus repellat eius temporibus rerum eaque, incidunt architecto itaque rem pariatur.
            Vel, eius. Repellat numquam, aliquid dolorem dolores laborum iure, nostrum iste facilis rerum veritatis consectetur accusamus eos fuga incidunt magni et pariatur nam sapiente ipsa amet impedit! Quia, dolores eum?
            Animi, veniam. Officiis dolore deserunt voluptatum omnis libero quasi perspiciatis debitis quam est deleniti labore itaque necessitatibus suscipit delectus cupiditate ipsam consequuntur quis distinctio, corrupti magnam pariatur ratione! Totam, explicabo?</p>
        </div>
    </main>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><? $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories['tags'] as $category): ?>
                <li><a href="#"><? $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
<?php
    include_once("templates/footer.php");
?>