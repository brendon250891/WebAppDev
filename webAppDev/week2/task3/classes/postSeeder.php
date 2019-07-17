<?php 
    namespace wad;
    use wad\Post;
    include_once 'post.php';

    class PostSeeder {
        // Generates mock data for testing purposes.
        public static function seed() {
            $posts = array(
                new Post("Bob", "Hi everyone."),
                new Post("John", "This is a new post."),
                new Post("Jill", "Has anyone seen Jack.")
            );
            return $posts;
        }
    }
?>