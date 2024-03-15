<?php
$posts = [
    [
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'img_modifier' => 'img/postfirst.jpg',
        'author' => 'Mat Vogels',
        'author_img' => 'img/postfirst-auhtor.jpg',
        'date' => 'September 25, 2015'
        // другие свойства этого поста
    ],
    [
        'title' => 'From Top Dawn',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'img_modifier' => 'img/postsecond.jpg',
        'author' => 'William Wong',
        'author_img' => 'img/postsecond-author.jpg',
        'date' => 'September 25, 2015'
        // свойства второго поста
    ],
];
?>

<?php
$posts_recent = [
    [
        'title' => 'Still Standing Tall',
        'subtitle' => 'Life begins at the end of your comfort zone.',
        'img_modifier' => 'img/varposts-first.jpg',
        'author' => 'William Wong',
        'author_img' => 'img/postsecond-author.jpg',
        'date' => '9/25/2015'
        // другие свойства этого поста
    ],
    [
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you it’s goingto be.',
        'img_modifier' => 'img/varposts-second.jpg',
        'author' => 'Mat Vogels',
        'author_img' => 'img/postfirst-auhtor.jpg',
        'date' => '9/25/2015'
        // свойства второго поста
    ],
    [
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to
        escape us.',
        'img_modifier' => 'img/varposts-third.jpg',
        'author' => 'Mat Vogels',
        'author_img' => 'img/postfirst-auhtor.jpg',
        'date' => '9/25/2015'
        // свойства второго поста
    ],
    [
        'title' => 'Through the Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in
        the world.',
        'img_modifier' => 'img/varposts-fourth.jpg',
        'author' => 'William Wong',
        'author_img' => 'img/postsecond-author.jpg"',
        'date' => '9/25/2015'
        // другие свойства этого поста
    ],
    [
        'title' => 'TAwaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'img_modifier' => 'img/varposts-fifth.jpg',
        'author' => 'Mat Vogels',
        'author_img' => 'img/postfirst-auhtor.jpg',
        'date' => '9/25/2015'
        // другие свойства этого поста
    ],
    [
        'title' => 'Try it Always',
        'subtitle' => 'The world is a book, and those who do not travel
        read only one page.',
        'img_modifier' => 'img/varposts-sixth.jpg',
        'author' => 'Mat Vogels',
        'author_img' => 'img/postfirst-auhtor.jpg',
        'date' => '9/25/2015'
        // другие свойства этого поста
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Oxygen:wght@300;400;700&display=swap"
        rel="stylesheet">
    <title>The Road Ahead</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="header__inner">
                <span class="header__logo">Escape.</span>
                <nav>
                    <ul class="navigation">
                        <li><a class="navigation__link" href="#">HOME</a></li>
                        <li><a class="navigation__link" href="#">CATEGORIES</a></li>
                        <li><a class="navigation__link" href="#">ABOUT</a></li>
                        <li><a class="navigation__link" href="#">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
            <div class="introduction">
                <h1 class="introduction__title">Let's do it together.</h1>
                <h2 class="introduction__subtitle">We travel the world in search of stories. Come along for the ride.</h2>
                <button class="introduction__button">View Latest Posts</button>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="guide">
                <nav>
                    <ul class="nav">
                        <li><a class="nav__link" href="#">Nature</a></li>
                        <li><a class="nav__link" href="#">Photography</a></li>
                        <li><a class="nav__link" href="#">Relaxation</a></li>
                        <li><a class="nav__link" href="#">Vacation</a></li>
                        <li><a class="nav__link" href="#">Travel</a></li>
                        <li><a class="nav__link" href="#">Adventure</a></li>
                    </ul>
                </nav>
            </div>

            <div class="posts">
                <span class="posts__title">Featured Posts</span>
                <div class="list-post">
                    <?php
                    foreach ($posts as $post) {
                        include 'post_preview.php';
                    }
                    ?>
                </div>
            </div>

            <div class="posts-recent">
                <span class="posts-recent__title">Recent Posts</span>
                <div class="posts-second">
                <?php
                    foreach ($posts_recent as $post_recent) {
                        include 'post_recent_preview.php';
                    }
                    ?>    
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <span class="footer__logo">Escape.</span>
                <nav>
                    <ul class="navigation">
                        <li><a class="navigation__link" href="#">HOME</a></li>
                        <li><a class="navigation__link" href="#">CATEGORIES</a></li>
                        <li><a class="navigation__link" href="#">ABOUT</a></li>
                        <li><a class="navigation__link" href="#">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>

</body>

</html>