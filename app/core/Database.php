<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASS;
    private $db_name = DB_NAME;

    // Connecting model to database
    private $dbh; // dtabase Handler
    private $stmt;

    // Koneksi
    public function __construct()
    {
        // Data Source Name
        $dsn = 'mysql:host='  .$this->host . ';dbname=' . $this->db_name;

        // Option
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->dbh = new PDO($dsn, $this->user, $this->password, $option);
        } catch(PDOException $e){

            // If error
            die($e->getMessage());
        }
    }

    // Generic
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    // Binding Data
    public function bind($parameter, $value, $type = null)
    {
        if( is_null($type) )
        {
            switch( true ){

                // If Integer
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                // If Boolean
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                // If null
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                // Default String
                default:
                    $type = PDO::PARAM_STR;

            }
        }

        // Proses Bind
        $this->stmt->bindValue($parameter, $value, $type);
    }

    // Proses Eksekusi
    public function execute()
    {
        $this->stmt->execute();
    }

    // Mengembalikan banyak data
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Satu data aja
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Perubahan baris
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}