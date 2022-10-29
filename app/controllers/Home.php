<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUserNama();
        $data['umur'] = $this->model('User_model')->getUserUmur();
        $this->view('templates/header', $data); //memanggil function view yang ada di core/controller
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

}