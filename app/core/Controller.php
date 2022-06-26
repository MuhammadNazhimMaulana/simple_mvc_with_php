<?php 

// Main Class for Controller
class Controller {
    
    // Method view
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    // Method Model
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';

        // Instansiasi model untuk di pakai
        return new $model;
    }
}
