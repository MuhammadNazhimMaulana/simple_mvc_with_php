<?php

class About extends Controller{

    public function index($nama = 'Tono', $pekerjaan = 'Main', $umur = 21)
    {
        $data = [
            'judul' => 'Halaman About',
            'nama' => $nama,
            'pekerjaan' => $pekerjaan,
            'umur' => $umur
        ];

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data = [
            'judul' => 'Halaman About',
        ];

        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}