<?php
    include_once("templates/header.php");

        if(isset($_GET['id'])); {
            
            $postId = $_GET['id'];
            
            $currentPost;
            
            foreach($posts as $post) {

                if($post['id'] == $postId) {

                    $currentPost = $post;
                }
            }
        }
?>
<img src="https://media.tenor.com/9nZ5fdxEyQQAAAAi/chatting-twich-emote-xqc-asmongold-chat-tyler1.gif" class="pepe-post">

        <main id="post-container">

            <div class="content-container">

                <h1 id="main-title"><?= $currentPost['title'] ?></h1>

                <p id="post-desc"><?= $currentPost['description'] ?></p>
                    <div class="img-container">
                        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
                    </div>

                    <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem reiciendis repellendus architecto facilis eligendi dolorum ea dicta, rem veritatis reprehenderit a ut consectetur! Quidem, autem aliquid sint architecto doloremque maiores.
                    Iste voluptate expedita cum odit dolor sed nisi optio veniam ratione doloribus minus voluptatum suscipit, consequuntur nostrum? Dolore laborum ex voluptatum eaque obcaecati necessitatibus quod illo. Nam officia cupiditate magnam!
                    Similique labore porro, animi voluptas quo magni. A, deserunt eaque sequi iure similique modi optio aliquid reprehenderit, velit ab voluptate quam soluta facere debitis? Autem asperiores cupiditate qui fugit! A.
                    Laudantium itaque nulla minus expedita sunt delectus beatae eveniet quasi ipsum optio ipsa ea excepturi, explicabo nobis ut rem facere incidunt? Sunt ex adipisci sed natus corrupti laboriosam aliquid doloribus?
                    Harum tenetur ipsum itaque corrupti magnam eveniet sequi consequuntur neque distinctio modi, deserunt aliquam atque dicta quas praesentium quo dolorem nesciunt voluptatibus? Illo praesentium tempora doloribus, unde voluptas iure atque!</p>

                    <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem reiciendis repellendus architecto facilis eligendi dolorum ea dicta, rem veritatis reprehenderit a ut consectetur! Quidem, autem aliquid sint architecto doloremque maiores.
                    Iste voluptate expedita cum odit dolor sed nisi optio veniam ratione doloribus minus voluptatum suscipit, consequuntur nostrum? Dolore laborum ex voluptatum eaque obcaecati necessitatibus quod illo. Nam officia cupiditate magnam!
                    Similique labore porro, animi voluptas quo magni. A, deserunt eaque sequi iure similique modi optio aliquid reprehenderit, velit ab voluptate quam soluta facere debitis? Autem asperiores cupiditate qui fugit! A.
                    Laudantium itaque nulla minus expedita sunt delectus beatae eveniet quasi ipsum optio ipsa ea excepturi, explicabo nobis ut rem facere incidunt? Sunt ex adipisci sed natus corrupti laboriosam aliquid doloribus?
                    Harum tenetur ipsum itaque corrupti magnam eveniet sequi consequuntur neque distinctio modi, deserunt aliquam atque dicta quas praesentium quo dolorem nesciunt voluptatibus? Illo praesentium tempora doloribus, unde voluptas iure atque!</p>
            </div>
            
            <aside id="nav-container">

                <h3 id="tags-title">Tags</h3>

                    <ul id="tag-list">

                        <?php foreach($currentPost['tags'] as $tag): ?>

                            <li>
                                <a href="#####"><?= $tag ?></a>
                            </li>
                        <?php endforeach; ?>

                    </ul>

                <h3 id="categories-title">Categorias</h3>

                    <ul id="categories-list">

                        <?php foreach($categories as $category): ?>

                            <li>
                                <a href="#####"><?= $category ?></a>
                            </li>

                        <?php endforeach; ?>

                    </ul>

            </aside>

        </main>

<?php
    include_once("templates/footer.php");
?>