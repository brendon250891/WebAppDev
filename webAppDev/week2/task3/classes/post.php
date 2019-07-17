<?php
    namespace wad;
    use wad\Comment;
    include_once 'comment.php';

    class Post {
        protected $avatar;
        protected $userName;
        protected $message;
        protected $date;
        protected $comments;

        // Default constructor to instantiate a new post object.
        function __construct($userName, $message) {
            $this->avatar = "./images/user.jpg";
            $this->userName = $userName;
            $this->message = $message;
            $this->date = date("l jS \of F Y h:i:s A");
            $this->comments = array(new Comment("", ""));
        }

        // Gets the avatar associated with the posters account.
        function getAvatar() {
            return $this->avatar;
        }

        // Gets the username of the poster.
        function getUserName() {
            return $this->userName;
        }
        
        // Gets the content of the post.
        function getMessage() {
            return $this->message;
        }

        // Gets the date the post was created.
        function getDate() {
            return $this->date;
        }

        // Gets any comments that have been left for the post.
        function getComments() {
            return $this->comments;
        }

        // Adds a new comment to the post.
        function addComment($comment) {
            if ($this->comments[0]->getUserName() == "" && $this->comments[0]->getComment() == "") {
                $this->comments[0] = $comment;
            } else {
                $this->comments[] = $comment;
            }
        }
    }
?>