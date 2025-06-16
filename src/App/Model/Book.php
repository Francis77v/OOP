<?php
declare(strict_types=1);

namespace Flore\Oop\App\Model;


class Book
{
    protected $books = [];
    private $jsonFileName;

    public function __construct(string $filename = BASE_PATH . '/exercise/books.json')
    {
        $this->jsonFileName = $filename;
        if (file_exists($this->jsonFileName)) {
            $json = file_get_contents($this->jsonFileName);
            $this->books = json_decode($json, true) ?? [];
        } else {
            $this->books = [];
        }
    }

    private function saveToJson()
    {
    $json = json_encode($this->books, JSON_PRETTY_PRINT);
    file_put_contents($this->jsonFileName, $json);
    }

    private function loadFromJson()
    {
        //get file first
    $jsonContent = file_get_contents($this->jsonFileName);
        //decode the json 
    $this->books = json_decode($jsonContent, true);
    }


    //Add book method
    public function addBook(string $title, string $author, string $date)
    {
    $this->books[] = [
        "title" => $title,
        "author" => $author,
        "date"  => $date,
        "availability" => true
    ];

    $this->saveToJson(); 
    return $this;
    }

    //view book
    public function viewBook()
    {
        $this->loadFromJson();
        return $this->books; // ✅ returns all books
    }

    //borrow book
    public function borrowBook(string $title)
    {
        foreach ($this->books as &$book) {
            if ($book['title'] === $title) {
                if ($book['availability']) {
                    $book['availability'] = false;         
                    $this->saveToJson();           
                    return "✅ Book '{$title}' has been borrowed.";
                } else {
                    return "❌ Book '{$title}' is already borrowed.";
                }
            }
        }
        $this->saveToJson();
        return "❌ Book '{$title}' not found.";
    }

    //return book
    public function returnBook($title)
    {
        foreach ($this->books as &$book) {
            if ($book['title'] === $title){
                if ($book['availability'] === false) {
                    $book['availability'] = true;
                    $this->saveToJson();
                    return "Book now returned";
                } else {
                    return "book doesnt exist";
                }
            }
        }

        return "test";
    }


}