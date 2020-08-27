<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?= $data['students']['nama']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?= $data['students']['jurusan']; ?>
            </h6>
            <br>
            <p class="card-text">
                <?= $data['students']['tem_lahir']; ?>,
                <?= $data['students']['tan_lahir']; ?>
                <br>
                <?= $data['students']['alamat']; ?>
            </p>
            <a href="<?= BASEURL; ?>/siswa/index" class="card-link">Kembali</a>
        </div>
    </div>
</div>