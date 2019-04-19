<?php

class Mahasiswa_model {

    /*private $mhs = 
    [
        [
            "nama" => "Fajar Zuliansyah Trihutama",
            "nim" => "10118411",
            "email" => "fajarzuliansyaht@gmail.com",
            "jurusan" => "Teknik Informatika"    
        ],
        [
            "nama" => "Saeful Apriana",
            "nim" => "10118435",
            "email" => "saefulapriana12@gmail.com",
            "jurusan" => "Teknik Informatika"    
        ],
        [
            "nama" => "Muhammad Humam Ramadhan",
            "nim" => "10118419",
            "email" => "humam.yuma31@gmail.com",
            "jurusan" => "Teknik Informatika"    
        ],
        [
            "nama" => "Ridwan Julian Caesar",
            "nim" => "10118402",
            "email" => "ridwancaesar31@gmail.com",
            "jurusan" => "Teknik Informatika"    
        ],
        [
            "nama" => "Melisa Nurmaulina",
            "nim" => "10118413",
            "email" => "melisamauli@gmail.com",
            "jurusan" => "Ilmu Komunikasi"    
        ]
    ];*/

    private $dbh; //database handler
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root','');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() 
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
