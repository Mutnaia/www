<?php

require_once "./books.php";

$book1 = new Book();
$book2 = new Book();
$book3 = new Book();

$book4 = new Book('Almost died.', 155,2024);
$book5 = new Book('Still alive.', 260,2023);
$book6 = new Book('I hope this is the end.', 666,2022);

$books = array($book1, $book2, $book3, $book4, $book5, $book6);

foreach ($books as $book) {
    echo "Title: <strong>" . $book->getTitle() . "</strong><br>";
    echo "Pages: <strong> " . $book->getPages() . "</strong><br>";
    echo "Release Year: <strong>" . $book->getReleaseYear() . "</strong><br><br>";
}

?>