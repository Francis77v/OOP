<?php
use Flore\Oop\App\Controllers\TestController;
use Flore\Oop\App\Controllers\BookController;

return [
    '/test/views' => [TestController::class, 'view'],
    '/books' => [BookController::class, 'view'],
    '/addBook' => [BookController::class, 'addBook']      
];
