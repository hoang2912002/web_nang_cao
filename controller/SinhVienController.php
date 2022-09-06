<?php
    class SinhVienController{
        private string $folder = "sinh_vien";
        public function index() : void
        {
            require "model/SinhVien.php";
            $arr = (new SinhVien())->all();
            require "view/$this->folder/index.php";
        }

        public function create() : void
        {
            require "model/Lop.php";
            $lops = (new Lop())->all();
            require "view/$this->folder/create.php";
        }
        public function store() : void
        {
            require "model/SinhVien.php";
            $arr = (new SinhVien())->create($_POST); 
        }

        public function edit() : void
        {
            $id = $_GET["id"];
            require "model/SinhVien.php";   
            $each = (new SinhVien())->find($id);
            require "model/Lop.php";
            $lops = (new Lop())->all();
            require "view/$this->folder/edit.php";
        }

        public function update() : void
        {
            require "model/SinhVien.php";
            (new SinhVien())->update($_POST);
            header("location:index.php?action=index&controller=sinh_vien");   
        }

        public function delete() : void
        {
            require "model/SinhVien.php";
            (new SinhVien())->delete($_GET["id"]);
            header("location:index.php?action=index&controller=sinh_vien");   
        }
    }