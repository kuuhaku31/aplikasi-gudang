<div class="container mt-4">

    <div class="row">

        <!-- 
        | bagian ini digunakan untuk menampilkan pesan kilat  
        | atau flash message setelah operasi CRUD dilakukan  
        | sebagai penanda bahwa data berhasil atau gagal  
        | dilakukan  
        -->

        <div class="col-lg-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <!-- 
            | bagian ini adalah main content dari halaman yang berisi button tambah data siswa 
            | dan list dari nama siswa yang sudah ada di database 
            -->

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm tambahData" data-toggle="modal" data-target="#tambahData" style="position: absolute; right: 15px">
                Tambah data
            </button>

            <h3>Daftar Siswa</h3>

            <!-- 
            | bagian ini berisi nama siswa dan beberapa tombol untuk  
            | melakukan beberapa fitur CRUD php yaitu create, read
            | update dan delete data di dalam database 
            -->

            <!-- list nama siswa -->
            <ul class="list-group mt-3">
                <?php foreach ($data['students'] as $student) : ?>
                    <li class="list-group-item">

                        <!-- 
                        | bagian ini berisi nama siswa dan hanya di tulis sekali saja
                        | karena bagian ini ada di dalam tag perulangan php yaitu
                        | foreach yang berarti baris ini akan diloop sesuai 
                        | jumlah data yang ada di dalam database  
                        -->

                        <?= $student["nama"]; ?>

                        <!-- =========================================================================== -->

                        <!-- 
                        | bagian ini adalah beberapa tombol untuk melakukan operasi CRUD
                        | hapus data siswa / database
                        | ubah data siswa / database
                        | lihat data siswa / database
                        -->

                        <!-- hapus data siswa -->
                        <a href="<?= BASEURL; ?>/siswa/hapus/<?= $student['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('YAKIN?');">
                            hapus
                        </a>

                        <!-- ubah data siswa -->
                        <a href="<?= BASEURL; ?>/siswa/ubah/<?= $student['id']; ?>" class="badge badge-warning float-right ml-1 ubahData" data-toggle="modal" data-target="#tambahData" data-id="<?= $student['id']; ?>">
                            ubah
                        </a>

                        <!-- detail data siswa -->
                        <a href=" <?= BASEURL; ?>/siswa/detail/<?= $student['id']; ?>" class="badge badge-primary float-right ml-1">
                            detail
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>


<!-- 
| bagian ini adalah modal box yang nantinya akan digunakan  
| untuk input dan edit data pada database
-->
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalHeader">Tambah data siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/siswa/tambah" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tem_lahir">Tempat lahir</label>
                            <input type="text" class="form-control" name="tem_lahir" id="tempatlahir" autocomplete="off">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tan_lahir">Tanggal lahir</label>
                            <input type="text" class="form-control datepicker" name="tan_lahir" id="tanggallahir" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan">
                            <option value="IPA">IPA</option>
                            <option value="IPS">IPS</option>
                            <option value="BAHASA">BAHASA</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit">Tambah data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>