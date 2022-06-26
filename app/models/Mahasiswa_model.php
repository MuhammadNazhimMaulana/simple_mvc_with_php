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
}