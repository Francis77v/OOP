<?php

namespace Flore\Oop\App\Controllers;
use Flore\Oop\App\Model\Book;

class BookController
{
    private Book $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }
    
    public function view()
    {
    $books = $this->book->viewBook();

    $this->render('/books', ['books' => $books]);
    }


    public static function addBook()
    {
        return self::Render('/addBook');
    }

    //to render view page from http request
    protected function render(string $view, array $data = [])
    {
        extract($data); // makes $books available
        $viewPath = BASE_PATH . '/views/' . $view . '.php';

        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            echo "❌ View not found: $viewPath";
        }
    }


    //take data from model class
    public function viewBooks()
    {
        $viewBooks = (new Book())->viewBook();
        
        return $viewBooks;
    }

   
}