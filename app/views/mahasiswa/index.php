<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>

            <!-- Looping -->
            <?php foreach( $data['mhs'] as $mhs ) : ?>
                <ul>
                    <li><?= $mhs['nama']; ?></li>
                    <li><?= $mhs['npm']; ?></li>
                    <li><?= $mhs['email']; ?></li>
                </ul>
            <?php endforeach ?>
        </div>
    </div>

</div>