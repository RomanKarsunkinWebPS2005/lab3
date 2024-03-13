<article class="post">
    <img class="post__image" src="<?= $post['img_modifier'] ?>">
    <div class="post__filling">
        <span class="post__title"><?= $post['title'] ?></span>
        <span class="post__subtitle"><?= $post['subtitle'] ?></span>
        <div class="post__footer">
            <div class="author">
                <img class="author_img" src="<?= $post['author_img']?>">
                <span class="author_name"><?= $post['author'] ?></span>
            </div>
            <span class="date"><?= $post['date'] ?></span>
        </div>
    </div>
</article>