<?php
include_once "Book.php";

class EBook extends Book {
    private $fileSize;

    public function __construct($title, $author, $price, $fileSize) {
        parent::__construct($title, $author, $price);
        $this->fileSize = $fileSize;
    }

    public function getDetails() {
        return "EBook Title: $this->title, Author: $this->author, Price: $this->price, File Size: $this->fileSize MB";
    }
}
?>
