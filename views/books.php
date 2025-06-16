<?php

use Flore\Oop\App\Controllers\BookController;
use Flore\Oop\App\Model\Book;

$book = new Book();
$controller = new BookController($book); // ✅ Injecting dependency
$books = $controller->viewBooks(); // ✅ This works if view() is not static



foreach ($books as $book) {
    echo "<div style='
        border: 1px solid #ccc;
        padding: 16px;
        margin: 16px 0;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        background-color: #f9f9f9;
    '>";
    
    echo "<h2 style='margin: 0; color: #333;'>{$book['title']}</h2>";
    echo "<p><strong>Author:</strong> {$book['author']}</p>";
    echo "<p><strong>Date:</strong> {$book['date']}</p>";

    echo "<p><strong>Status:</strong> " . 
         ($book['availability'] ? " Available" : "Not Available") . 
         "</p>";

    echo "</div>";
}

