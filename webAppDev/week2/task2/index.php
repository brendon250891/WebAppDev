<?php
    include 'classes/postSeeder.php';
    $posts = wap\PostSeeder::seed();
    $posts[0]->addComment("Jack", "Nice post.");
    $posts[0]->addComment("Bill", "Yes.");
    $posts[1]->addComment("Fred", "NO");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Week2 - Task 2</title>
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <div id="content">
            <h1>Generic Social Media Site</h1>
            <?php foreach($posts as $post) : ?>
            <div id="post">
                <img src="<?= $post->getImage(); ?>" width="100" height="100" alt="Placeholder image for a user account." /> <br />
                <?= $post->getUserName(); ?> 
                <?= $post->getMessage(); ?>
                recieved: <?= $post->getDate(); ?>
            </div>
            <?php foreach($post->getComments() as $comment) : ?>
                <div id="comment">
                    <img src="<?= $comment['image']; ?>" height="50" width="50" alt="Placeholder image for a user account." />
                    <?= $comment['userName']; ?>
                    <?= $comment['comment']; ?>
                </div>
            <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </body>
</html>