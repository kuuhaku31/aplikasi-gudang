<div class="container">

    <!-- Portfolio Item Heading -->
    <div class="row mt-1">
        <div class="col-xs-1 align-left">
            <a href="<?= BASEURL; ?>/barang">
                <i class="fa fa-arrow-circle-left fa-2x"></i>
            </a>
            <h1 class="my-4 float-right ml-3"><?= $data['title']; ?>
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
            <h3 class="my-3">Project Details</h3>
            <ul>
                <li>Lorem Ipsum</li>
                <li>Dolor Sit Amet</li>
                <li>Consectetur</li>
                <li>Adipiscing Elit</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->