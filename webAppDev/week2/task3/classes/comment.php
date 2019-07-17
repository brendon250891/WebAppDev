<?php 
    namespace wad;

    class Comment {
        protected $avatar;
        protected $userName;
        protected $comment;
        protected $date;

        // Default constructor to instantiate a new comment object.
        function __construct($userName, $comment) {
            $this->avatar = "./images/user.jpg";
            $this->userName = $userName;
            $this->comment = $comment;
            $this->date = date("l jS \of F Y h:i:s A");
        }

        // Gets the avatar image associated with the commenters account.
        function getAvatar() {
            return $this->avatar;
        }

        // Gets the user name of the commenter.
        function getUserName() {
            return $this->userName;
        }

        // Gets the comment that the user left on the post.
        function getComment() {
            return $this->comment;
        }

        // Gets the date information for when the comment was left.
        function getDate() {
            return $this->date;
        }
    }
?>