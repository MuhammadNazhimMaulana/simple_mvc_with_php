<?php

class Mahasiswa_model{

    // Connecting model to database
    private $dbh; // dtabase Handler
    private $stmt;

    // Koneksi
    public function __construct()
    {
        // Data Source Name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e){

            // If error
            die($e->getMessage());
        }
    }

    // Method Model
    public function getAllMahasiswa()
    {
        // Prepare Query
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');

        // Execute
        $this->stmt->execute();

        // Returning an Assosiative Array
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}