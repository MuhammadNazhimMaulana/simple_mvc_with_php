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

    // Hapus Data
    public function delete($id)
    {
       if( $this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0){

        // Set Flash Message
        Flasher::setFlash('berhasil', 'dihapus', 'success');
        
        // Redirect ke Halaman Mahasiswa
        header('Location: ' . BASEURL . '/mahasiswa');
        exit;
    }else{
           
        // Set Flash Message
        Flasher::setFlash('gagal', 'menghapus', 'danger');
        
        // Redirect ke Halaman Mahasiswa
        header('Location: ' . BASEURL . '/mahasiswa');
       }
    }

    public function getDetail()
    {
        // Make a json
        echo json_encode($this->model('Mahasiswa_model')->getMhasiswaById($_POST['id']));
    }

    public function update()
    {
        if( $this->model('Mahasiswa_model')->updateDataMahasiswa($_POST) > 0){

            // Set Flash Message
            Flasher::setFlash('berhasil', 'diubah', 'success');
            
            // Redirect ke Halaman Mahasiswa
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }else{
               
            // Set Flash Message
            Flasher::setFlash('gagal', 'diubah', 'danger');
            
            // Redirect ke Halaman Mahasiswa
            header('Location: ' . BASEURL . '/mahasiswa');
           }
    }

    public function search()
    {
        $data = [
            'judul' => 'Halaman Mahasiswa',
            'mhs' => $this->model('Mahasiswa_model')->cariDataMahasiswa()
        ];

        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');  
    }
}