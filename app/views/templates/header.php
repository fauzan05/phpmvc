<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= BASEURL ?>/css/bootstrap.css" rel="stylesheet">
    <title>Halaman <?= $data['judul'] ?> </title>
</head>
<nav class="navbar navbar-dark bg-dark">
<div class="container mt-2">
    <!-- Navbar content -->
    <!-- <nav class="navbar navbar-expand-lg bg-light"> -->
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PHP MVC</a>
                <div class="fixed-top">
                <button class="navbar-toggler mt-2" type="button" ct data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?=BASEURL?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?=BASEURL?>/mahasiswa">Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=BASEURL?>/about">About</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    <!-- div penutup container -->
    </div>
<body>