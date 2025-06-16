<?php

namespace Flore\Oop\App\Controllers;

class TestController
{
    public static function view()
    {
        $name = 'Francis';
        $message = 'Welcome to static view rendering!';

        // Call the render method
        return self::render('test/views', compact('name', 'message'));
    }

    protected static function render(string $view, array $data = [])
    {
        extract($data);
        $viewPath = BASE_PATH . '/views/' . $view . '.php';

        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            echo "❌ View not found: $viewPath";
        }
    }



}
