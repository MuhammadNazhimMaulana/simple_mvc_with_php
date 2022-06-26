<?php

class Mahasiswa extends Controller{

    // Method default
    public function index()
    {
        $data = [
            'judul' => 'Halaman Mahasiswa',
            'mhs' => $this->model('Mahasiswa_model')->getAllMahasiswa()
        ];

        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    // Method default
    public function detail($id)
    {
        $data = [
            'judul' => 'Detail Mahasiswa',
            'mhs' => $this->model('Mahasiswa_model')->getMhasiswaById($id)
        ];

        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }
}