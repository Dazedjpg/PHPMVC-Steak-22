<?php
class Menu {
    private $conn;
    private $table_name = "menu";

    public $id;
    public $nama_menu;
    public $kategori_id;
    public $harga;
    public $deskripsi;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT m.*, k.nama_kategori 
                 FROM " . $this->table_name . " m
                 LEFT JOIN kategori k ON m.kategori_id = k.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getById($id) {
        $query = "SELECT m.*, k.nama_kategori 
                 FROM " . $this->table_name . " m
                 LEFT JOIN kategori k ON m.kategori_id = k.id
                 WHERE m.id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt;
    }
}