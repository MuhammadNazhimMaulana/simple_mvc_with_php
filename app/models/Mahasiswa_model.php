<?php

class Mahasiswa_model{
    // Nama tabel
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
      $this->db = new Database;  
    }

    // Method Model
    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }
    
    public function getMhasiswaById($id)
    {
        // Query
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');

        // Binding
        $this->db->bind('id', $id);

        // Return Value (single value)
        return $this->db->single();
    }

    // Insert Data
    public function tambahDataMahasiswa($data)
    {
        // Query insert
        $query = "INSERT INTO mahasiswa
                  VALUES
                  ('', :nama, :npm, :email, :jurusan)";
        
        // Jalankan Query
        $this->db->query($query);

        // Binding Query
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        // Eksekusi
        $this->db->execute();
        
        // Mengembalikan angka
        return $this->db->rowCount();
    }

    // Delete Data
    public function hapusDataMahasiswa($id)
    {
        // Query Delete
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        
        // Jalankan Query
        $this->db->query($query);

        // Binding Query
        $this->db->bind('id', $id);

        // Eksekusi
        $this->db->execute();
        
        // Mengembalikan angka
        return $this->db->rowCount();
    }
}