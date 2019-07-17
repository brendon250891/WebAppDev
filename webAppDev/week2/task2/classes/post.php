<?php 

    namespace wap;

    class Post {
        protected $userName;
        protected $message;
        protected $image;
        protected $date;
        protected $comments;

        function __construct($userName, $message) {
            $this->userName = $userName;
            $this->message = $message;
            $this->image = "./images/user.jpg";
            $this->date = date("l jS \of F Y h:i:s A");
            $this->comments = [];
        }

        function getUserName() {
            return $this->userName;
        }

        function getMessage() {
            return $this->message;
        }

        function getImage() {
            return $this->image;
        }

        function getDate() {
            return $this->date;
        }

        function getComments() {
            return $this->comments;
        }

        function addComment($userName, $comment) {
            $this->comments[] = array("userName" => $userName, "comment" => $comment, "image" => './images/user.jpg');
        }
    }
?>