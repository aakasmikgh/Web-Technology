<?php
abstract class Media {
    protected $title;
    protected $author;
    protected $price;

    public function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    abstract public function getDetails();
}
?>
