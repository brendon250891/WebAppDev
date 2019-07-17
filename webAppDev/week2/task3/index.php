<?php 
    include 'classes/postSeeder.php';
    include 'classes/commentSeeder.php';

    $posts = wad\PostSeeder::seed();
    wad\CommentSeeder::seed($posts);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <div class="content">
            <h1>Generic Social Media Site</h1>
            <?php foreach($posts as $post) : ?>
                <div class="post">
                    <div class="container">
                        <div class="row avatar">
                            <div>
                                <img src="<?= $post->getAvatar(); ?>" width="100" height="100"/>
                            </div>
                            <div>
                                <?= $post->getUserName(); ?>
                            </div>
                        </div>
                        <div class="row message-box">
                            <div class="message">
                                <?= $post->getMessage(); ?>
                            </div>
                            <div class="gap"></div>
                            <div class="date">
                                Posted: <?= $post->getDate(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php foreach($post->getComments() as $comment) : ?>
                    <div class="comment">
                        <div class="container">
                            <div class="row avatar">
                                <div>
                                    <img src="<?= $comment->getAvatar(); ?>" width="50" height="50" />
                                </div>
                                <div>
                                    <?= $comment->getUserName(); ?>
                                </div>
                            </div>
                            <div class="row message-box">
                                <div>
                                    <?= $comment->getComment(); ?>
                                </div>
                                <div class="gap"></div>
                                <div class="date">
                                    Commented: <?= $comment->getDate(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div> 
    </body>
</html>