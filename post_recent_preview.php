<article class="post-second">
    <a href="post.php" class="post__link"></a>
    <img class="post-second__image" src="<?= $post_recent['img_modifier'] ?>" alt="">
    <div class="post-second__filling">
        <div class="post-second__header">
            <span class="post-second__title"><?= $post_recent['title'] ?></span>
            <span class="post-second__subtitle"><?= $post_recent['subtitle'] ?></span>
        </div>
        <div class="post-second__footer">
            <div class="author-second">
                <img class="author-second_img" src="<?= $post_recent['author_img']?>" alt="">
                <span class="author-second_name"><?= $post_recent['author'] ?></span>
            </div>
            <span class="date-second"><?= $post_recent['date'] ?></span>
        </div>
    </div>
</article>