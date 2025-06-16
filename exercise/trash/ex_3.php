<!-- ✅ 1. Book Library
Create a Book class:

Properties: title, author, available (bool)

Method: borrow() – only if available

Method: returnBook() – marks as available again

🧠 Bonus: Track total borrowed count using a static property. -->
<?php
require_once __DIR__ . '/../vendor/autoload.php'; // go up one directory to find vendor


use Flore\Oop\App\Book;
// use App\Car;

$book = new Book();
// $car = new Car("Toyota", "Fortuner", 10);

// print_r($car);
print_r($book);



// $add = new Book();
// echo $add->borrowBook("Meinkampf");



// $borrow = $add->
// echo $borrow;
// echo $add->returnBook("A Whole New World");


// $view = $add->viewbook();



// foreach ($view as $book) {
//     echo "<div style='
//         border: 1px solid #ccc;
//         padding: 16px;
//         margin: 16px 0;
//         border-radius: 10px;
//         box-shadow: 0 0 10px rgba(0,0,0,0.1);
//         background-color: #f9f9f9;
//     '>";
    
//     echo "<h2 style='margin: 0; color: #333;'>{$book['title']}</h2>";
//     echo "<p><strong>Author:</strong> {$book['author']}</p>";
//     echo "<p><strong>Date:</strong> {$book['date']}</p>";

//     echo "<p><strong>Status:</strong> " . 
//          ($book['availability'] ? " Available" : "Not Available") . 
//          "</p>";

//     echo "</div>";
// }

