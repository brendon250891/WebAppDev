<?php
    $posts = array(
        ['name' => 'Bob', 'message' => 'Hello', 'image' => 'images/placeholder.jpg', 'date' => '1/1/11'],
        ['name' => 'John', 'message' => "It's a good day", 'image' => 'images/placeholder.jpg', 'date' => '2/2/11'],
        ['name' => 'Fred', 'message' => 'Sunny day', 'image' => 'images/placeholder.jpg', 'date' => '3/3/11']
    );
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Week2 - Task 1</title>
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <div id="content">
            <h1>Generic Social Media Site</h1>
            <?php foreach($posts as $post) : ?>
            <div id="post">
                <img src="<?= $post['image'] ?>" width="100" height="100" alt="Placeholder image for a user account." /> <br />
                <?= $post['name'] ?> 
                <?= $post['message'] ?>
                recieved: <?= $post['date'] ?>
            </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>