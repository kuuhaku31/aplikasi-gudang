 <!-- Main content -->
 <section class="content">

     <!-- Default box -->
     <div class="card">
         <div class="card-header">
             <h3 class="card-title">Title</h3>

             <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                     <i class="fas fa-minus"></i></button>
                 <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                     <i class="fas fa-times"></i></button>
             </div>
         </div>
         <div class="card-body">
             Start creating your amazing application!
         </div>
         <!-- /.card-body -->
         <div class="card-footer">
             Footer
         </div>
         <!-- /.card-footer-->
     </div>
     <!-- /.card -->

 </section>
 <!-- /.content -->

 <div class="container">

     <!-- Portfolio Item Heading -->
     <div class="row mt-1">
         <div class="col-xs-1 mr-3" style="margin-top: 34px;">
             <a href="<?= BASEURL; ?>/barang">
                 <i class="fa fa-arrow-circle-left fa-2x"></i>
             </a>
         </div>
         <div class="col-xs-12">
             <h1 class="my-4"><?= $data['title']; ?>
                 <small><?= $data['barang']['nama_barang']; ?></small>
             </h1>
         </div>
     </div>

     <!-- Portfolio Item Row -->
     <div class="row">

         <div class="col-md-6 img">
             <img class="img-fluid" src="<?= BASEURL; ?>img/<?= $data['barang']['pic']; ?>" alt="">
         </div>

         <div class="col-md-4">
             <h3 class="my-3">Deskripsi Produk</h3>
             <p><?= $data['barang']['deskripsi']; ?></p>
             <ul>
                 <li>Harga satuan : Rp. <?= $data['barang']['harga']; ?></li>
                 <li>Stok barang : <?= $data['barang']['stok']; ?> buah</li>
                 <li>Tanggal masuk : <?= $data['barang']['tan_masuk']; ?></li>
                 <li>
                     Tanggal keluar : <?= ($data['barang']['status'] == 'di_gudang') ? 'Masih di Gudang' : 'Sudah dikeluarkan'; ?>
                 </li>
             </ul>
         </div>

     </div>
     <!-- /.row -->

 </div>
 <!-- /.container -->