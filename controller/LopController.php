<?php

    class LopController
    {
        public function index() : void
        {
            require 'model/Lop.php';
            $arr = (new Lop())->all();

            require 'view/lop/index.php';
        }

        public function create() : void
        {
            require 'view/lop/create.php';
        }
        public function store() : void
        {
            
            require 'model/Lop.php';
            $arr = (new Lop())->create($_POST); 
        }

        public function edit() : void
        {
            $id = $_GET['id'];
            require 'model/Lop.php';
            $each = (new Lop())->find($id);
            require 'view/lop/edit.php';
        }

        public function update() : void
        {
            
            require 'model/Lop.php';
            (new Lop())->update($_POST);
            header('location:index.php?action=index');
            
        }

        public function delete() : void
        {
            
            require 'model/Lop.php';
            (new Lop())->delete($_GET['id']);
            header('location:index.php?action=index');
            
        }
    }