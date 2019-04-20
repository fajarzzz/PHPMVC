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

    private $table = 'mahasiswa';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa() 
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single(); 
    }

    public function tambahDataMahasiswa($data)
    {
            $query = "INSERT INTO mahasiswa
                        VALUES
                      ('',:nama, :nim, :email, :jurusan)";

            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('nim', $data['nim']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('jurusan', $data['jurusan']);

            $this->db->execute();

            return $this->db->rowCount();

    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }    

    public function ubahDataMahasiswa($data)
    {
            $query = "UPDATE mahasiswa SET
                        nama = :nama,
                        nim = :nim,
                        email = :email,
                        jurusan = :jurusan
                      WHERE id = :id";

            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('nim', $data['nim']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('jurusan', $data['jurusan']);
            $this->db->bind('id', $data['id']);

            $this->db->execute();

            return $this->db->rowCount();
    }

    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
