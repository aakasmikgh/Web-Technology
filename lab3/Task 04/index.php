<?php
include_once "database.php";
include_once "classes/Book.php";
include_once "classes/EBook.php";

// Creating a Book object
$book = new Book("The Great Gatsby", "F. Scott Fitzgerald", 15.99);
echo $book->getDetails() . "<br>";

// Creating an EBook object
$ebook = new EBook("1984", "George Orwell", 9.99, 2);
echo $ebook->getDetails() . "<br>";

// Insert data into the database
$query = $pdo->prepare("INSERT INTO books (title, author, price, type) VALUES (?, ?, ?, ?)");
$query->execute([$book->getDetails(), $book->getAuthorName(), 15.99, 'Physical']);
$query->execute([$ebook->getDetails(), $ebook->getAuthorName(), 9.99, 'EBook']);
?>
