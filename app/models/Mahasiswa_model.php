<?php

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;
    private $querySelect = 'SELECT * FROM ';
    private $queryTambah = 'INSERT INTO ';

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllMahasiswa()
    {
        $this->db->query($this->querySelect.$this->table);
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id)
    {
        $this->db->query($this->querySelect.$this->table.' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();

    }
}
