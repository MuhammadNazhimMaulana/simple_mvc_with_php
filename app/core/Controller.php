<?php 

// Main Class for Controller
class Controller {
    
    // Method view
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}
