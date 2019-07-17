<?php
    namespace wad;
    use wad\Post;
    use wad\Comment;
    include_once 'comment.php';
    include_once 'post.php';

    class CommentSeeder {
        // Generates comments for testing purposes.
        public static function seed($posts) {
            foreach ($posts as $post) {
                $post->addComment(new Comment("Paul", "Test comment 1"));
                $post->addComment(new Comment("Jim", "Test comment 2"));
                $post->addComment(new Comment("Anne", "Test comment 3"));
            }
        }
    }
?>