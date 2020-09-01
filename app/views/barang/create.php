<div class="container mt-4">
    <div class="row mt-1">
        <div class="col-xs-1 mr-3" style="margin-top: 28px;">
            <a href="<?= BASEURL; ?>/barang">
                <i class="fa fa-arrow-circle-left fa-2x"></i>
            </a>
        </div>
        <div class="col-xs-12">
            <h3 class="my-4"><?= $data['title']; ?></h3>
        </div>
    </div>

    <div class="col-6 mt-3">
        <form method="POST" action="<?= BASEURL; ?>barang/tambah">
            <div class="form-group">
                <label for="nama_barang">Nama barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi barang</label>
                <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"></textarea>
            </div>
            <div class="row form-group">
                <div class="col">
                    <label for="stok">Stok barang</label>
                    <input type="number" class="form-control" id="stok" name="stok">
                </div>
                <div class="col">
                    <label for="tan_masuk">Tanggal masuk</label>
                    <input type="date" class="form-control" id="tan_masuk" name="tan_masuk">
                </div>
                <div class="col">
                    <label for="ekspedisi">Ekspedisi</label>
                    <select class="form-control" id="ekspedisi" name="ekspedisi">
                        <option value="jne">JNE</option>
                        <option value="j&t">J & T</option>
                        <option value="ninja">Ninja</option>
                        <option value="pos_indo">Pos Indonesia</option>
                        <option value="tiki">Tiki</option>
                        <option value="si_cepat">Si Cepat</option>
                        <option value="wahana">Wahana</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="lok_gudang">Gudang</label>
                <select class="form-control" id="lok_gudang" name="lok_gudang">
                    <option value="jakarta">JAKARTA</option>
                    <option value="bandung">BANDUNG</option>
                    <option value="surabaya">SURABAYA</option>
                    <option value="gresik">GRESIK</option>
                    <option value="lamongan">LAMONGAN</option>
                    <option value="tuban">TUBAN</option>
                    <option value="semarang">SEMARANG</option>
                    <option value="kudus">KUDUS</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori barang</label>
                <select class="form-control" id="kategori" name="kategori">
                    <option value="elektronik">Elektronik</option>
                    <option value="rumah-tangga">Rumah Tangg</option>
                    <option value="mebel">Mebel</option>
                    <option value="otomotif">Otomotif</option>
                    <option value="gadget">Gadget</option>
                    <option value="atk">ATK</option>
                    <option value="aksesoris">Aksesoris</option>
                </select>
            </div>
            <button class="btn btn-success btn-md" type="submit" name="submit">Kirim data</button>
        </form>
    </div>
</div>