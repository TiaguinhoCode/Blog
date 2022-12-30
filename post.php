<?php
    include_once("templates/header.php");

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
            <h1 id="main-title">
                <?= $currentPost['title'] ?>
            </h1>
            <p id="post-description">
                <?= $currentPost['title'] ?>
            </p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, repudiandae odit ratione velit assumenda dicta amet reiciendis possimus delectus similique vel dolore minima eos natus ducimus eum. Sequi, enim fugit.
                Eum qui voluptatibus labore dignissimos esse rem porro eveniet mollitia sapiente tempora in nostrum, quia at similique molestiae voluptates provident expedita aut. Quos, reiciendis commodi esse delectus explicabo hic totam.
                Architecto nam, corrupti dolorum non ut dolor earum nesciunt placeat dignissimos. Eligendi saepe mollitia molestias vel voluptas consequuntur! Beatae illo vitae nulla sit vero minima labore recusandae placeat corrupti eos!
                Nobis, ea fuga. Sit perspiciatis eum eveniet, ratione rerum consequatur facere dignissimos autem minima deleniti earum alias in laboriosam iste eius, mollitia voluptate. Quod, totam. Tenetur laboriosam nesciunt alias vel.
                Natus quasi delectus, magni impedit, excepturi consequuntur corrupti consectetur cupiditate, nesciunt qui facere a vero modi obcaecati commodi laudantium aliquid distinctio ratione? Debitis vero enim officia rerum asperiores, quidem aspernatur?
            </p>
        </div>
    </main>

    <asside id="nav-container">
        <h3 class="tag-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($posts['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 class="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </asside>
<?php
    include_once("templates/footer.php");
?>