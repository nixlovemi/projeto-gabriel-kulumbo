<?php

/*
  * This is the Base Controller
  * Loads the Models and views
  *
  */
class Controller
{
    // Load Model
    public function model(string $model)
    {
        // Requires Model FIle
        require_once '../app/models/' . $model . '.php';

        // Instantiate Model
        return new $model();
    }

    // Load views
    public function view(string $view, string $title='', array $data = []): void
    {
        // Check for view file
        if (file_exists('../app/views/' . $view . '.php')) {
            define('VIEW_TITLE', $title);
            extract($data);
            
            require_once '../app/views/' . $view . '.php';
            return;
        }

        die('View does not exist');
    }
}
