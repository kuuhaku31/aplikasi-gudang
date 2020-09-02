<?php

class Gudang_model
{
    private $table = 'barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarang()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahBarang($data)
    {
        $query = "INSERT INTO barang
                    VALUES
                    ('', :nama_barang, :deskripsi , :stok, :tan_masuk, :tan_keluar, :lok_gudang, :ekspedisi, :kategori, :pic)";

        $this->db->query($query);
        $this->db->bind('nama_barang', htmlspecialchars($data['nama_barang']));
        $this->db->bind('deskripsi', htmlspecialchars($data['deskripsi']));
        $this->db->bind('stok', htmlspecialchars($data['stok']));
        $this->db->bind('tan_masuk', htmlspecialchars($data['tan_masuk']));
        $this->db->bind('tan_keluar', htmlspecialchars($data['tan_keluar']));
        $this->db->bind('lok_gudang', htmlspecialchars($data['lok_gudang']));
        $this->db->bind('ekspedisi', htmlspecialchars($data['ekspedisi']));
        $this->db->bind('kategori', htmlspecialchars($data['kategori']));
        $this->db->bind('pic', htmlspecialchars($data['pic']));

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusBarang($id)
    {
        $query = "DELETE FROM barang WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahBarang($data)
    {
        $query = "UPDATE $this->table SET
                    nama_barang = :nama_barang,
                    deskripsi = :deskripsi,
                    stok = :stok,
                    tan_masuk = :tan_masuk,
                    tan_keluar = :tan_keluar,
                    lok_gudang = :lok_gudang,
                    ekspedisi = :ekspedisi,
                    kategori = :kategori,
                    pic = :pic
                WHERE id =:id";

        $this->db->query($query);
        $this->db->bind('nama_barang', htmlspecialchars($data['nama_barang']));
        $this->db->bind('deskripsi', htmlspecialchars($data['deskripsi']));
        $this->db->bind('stok', htmlspecialchars($data['stok']));
        $this->db->bind('tan_masuk', htmlspecialchars($data['tan_masuk']));
        $this->db->bind('tan_keluar', htmlspecialchars($data['tan_keluar']));
        $this->db->bind('lok_gudang', htmlspecialchars($data['lok_gudang']));
        $this->db->bind('ekspedisi', htmlspecialchars($data['ekspedisi']));
        $this->db->bind('kategori', htmlspecialchars($data['kategori']));
        $this->db->bind('pic', htmlspecialchars($data['pic']));
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariBarang()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM barang WHERE nama_barang LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }
}
