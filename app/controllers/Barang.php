<?php

class Barang extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Barang';
        $data['barang'] = $this->model('Gudang_model')->getAllBarang();

        $this->view('templates/header', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail barang';
        $data['title'] = 'Detail barang';
        $data['barang'] = $this->model('Gudang_model')->getBarangById($id);

        $this->view('templates/header', $data);
        $this->view('barang/detail', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        $data['judul'] = 'Buat data baru';
        $data['title'] = 'Tambahkan data barang baru';

        $this->view('templates/header', $data);
        $this->view('barang/create', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Gudang_model')->tambahBarang($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . '/barang');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . '/barang');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Gudang_model')->hapusBarang($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . '/barang');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . '/barang');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Gudang_model')->getBarangById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Gudang_model')->ubahBarang($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . '/barang');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location:' . BASEURL . '/barang');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar barang';
        $data['students'] = $this->model('Gudang_model')->cariBarang();

        $this->view('templates/header', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }
}
