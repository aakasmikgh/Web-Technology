<?php
include_once "Media.php";
include_once "Author.php";

class Book extends Media implements Author {
    public function __construct($title, $author, $price) {
        parent::__construct($title, $author, $price);
    }

    public function getDetails() {
        return "Book Title: $this->title, Author: $this->author, Price: $this->price";
    }

    public function getAuthorName() {
        return $this->author;
    }

    public function __destruct() {
        echo "The book $this->title has been destroyed.";
    }
}
?>
