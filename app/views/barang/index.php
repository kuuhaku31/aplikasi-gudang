<!-- Main content -->
<section class="content mt-3">
    <!-- Default box -->
    <div class="card">
        <div class="card-body">
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
            | bagian ini adalah main content dari halaman yang berisi button tambah data barang 
            | dan list dari nama barang yang sudah ada di database 
            -->

                    <div class="align-text-top">
                        <a href="<?= BASEURL; ?>barang/create" class="float-right">
                            <i class="fa fa-plus-circle fa-2x"></i>
                        </a>
                        <h3>Daftar Barang</h3>
                    </div>

                    <!-- 
            | bagian ini berisi nama barang dan beberapa tombol untuk  
            | melakukan beberapa fitur CRUD php yaitu create, read
            | update dan delete data di dalam database 
            -->

                    <!-- list nama barang -->
                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Barang</th>
                                <th>Stok Gudang</th>
                                <th>Tanggal Masuk</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $num = 1;
                            foreach ($data['barang'] as $barang) :
                            ?>
                                <tr>
                                    <td class="align-middle">
                                        <?= $num++; ?>
                                    </td>
                                    <td class="align-middle">
                                        <!-- 
                                | bagian ini berisi nama barang dan hanya di tulis sekali saja
                                | karena bagian ini ada di dalam tag perulangan php yaitu
                                | foreach yang berarti baris ini akan diloop sesuai 
                                | jumlah data yang ada di dalam database  
                                -->

                                        <?= $barang["nama_barang"]; ?>
                                        <!-- =========================================================================== -->

                                    </td>
                                    <td class="align-middle">
                                        <?= $barang['stok']; ?> Buah
                                    </td>
                                    <td class="align-middle">
                                        <?= $barang['tan_masuk']; ?>
                                    </td>
                                    <td class="align-middle">
                                        <?= ($barang['status'] == 'di_gudang') ? 'Di gudang' : 'keluar'; ?>
                                    </td>
                                    <td class="align-middle">
                                        <!-- detail data barang -->
                                        <a href=" <?= BASEURL; ?>barang/detail/<?= $barang['id']; ?>" class="btn btn-sm btn-primary">
                                            detail
                                        </a>
                                        <button class="btn btn-danger btn-sm">
                                            <a href="<?= BASEURL; ?>siswa/hapus/<?= $barang['id']; ?>" style="text-decoration: none; color: #fff;">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->