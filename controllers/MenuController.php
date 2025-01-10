<?php
class MenuController {
    private $menu;

    public function __construct($db) {
        $this->menu = new Menu($db);
    }

    public function index() {
        $result = $this->menu->getAll();
        include 'views/menu/index.php';
    }

    public function detail($id) {
        $result = $this->menu->getById($id);
        include 'views/menu/detail.php';
    }
}