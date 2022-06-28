<div class="container mt-3">

    <div class="row">
        <div class="lg-6">
            <!-- Calling Flasher -->
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahDataMahasiswa">
            Tambah Data Mahasiswa
            </button>

            <h3>Daftar Mahasiswa</h3>

            <ul class="list-group">
                <!-- Looping -->
                <?php foreach( $data['mhs'] as $mhs ) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary">Detail</a>

                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="tambahDataMahasiswa" tabindex="-1" aria-labelledby="tambahDataMahasiswaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahDataMahasiswaLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <!-- Start of Form -->
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <!-- Name -->
            <div class="form-group">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <!-- NPM -->
            <div class="form-group">
                <label for="npm" class="form-label">NPM</label>
                <input type="number" class="form-control" id="npm" name="npm">
            </div>
            
            <!-- Email -->
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            
            <!-- Jurusan -->
            <div class="form-group">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-select" name="jurusan" id="jurusan">
                    <option selected>Pilih Jurusan</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Logistik Bisnis">Logistik Bisnis</option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Manajemen Bisnis">Manajemen Bisnis</option>
                </select>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        <!-- End of Form -->
      </div>
    </div>
  </div>
</div>