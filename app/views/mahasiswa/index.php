<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $dataa) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start"><?= $dataa['nama'] ?>
                        <button class="navbar-toggler mt-2" type="button" ct data-bs-toggle="collapse" data-bs-target="#navbarNav1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            <a href="<?= $dataa['id']?>" class="badge text-bg-primary text-decoration-none">Detail</a>
                        </button>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarNav1">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><?= $dataa['nrp']?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><?= $dataa['email']?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?= $dataa['jurusan']?></a>
                        </li>
                    </ul>
                </div>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>