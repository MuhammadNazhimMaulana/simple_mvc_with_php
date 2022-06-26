<div class="container">
    <div class="card text-dark bg-light mb-3 mt-4" style="max-width: 18rem;">
        <div class="card-header"><?= $data['mhs']['nama']; ?></div>
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['npm']; ?></h5>
            <p class="card-text"><?= $data['mhs']['email']; ?></p>
            <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>