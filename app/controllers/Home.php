<?php

class Home extends Controller{

    // Method default
    public function index()
    {
        $data = [
            'judul' => 'Halaman About',
        ];

        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}