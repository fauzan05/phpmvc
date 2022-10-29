<?php

class User_model {
    public $nama = 'fauzan';
    public $umur = '32 Tahun';

    public function getUserNama(){
        return $this->nama; 
    }
    public function getUserUmur(){
        return $this->umur;
    }
}
