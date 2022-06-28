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

    // Tambah Data
    public function tambah()
    {
       if( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0){

        // Set Flash Message
        Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        
        // Redirect ke Halaman Mahasiswa
        header('Location: ' . BASEURL . '/mahasiswa');
        exit;
    }else{
           
        // Set Flash Message
        Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        
        // Redirect ke Halaman Mahasiswa
        header('Location: ' . BASEURL . '/mahasiswa');
       }
    }
}