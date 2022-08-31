<?php
    class LopController
    {
        public function index()
        {
            require 'model/Lop.php';
            $arr = (new Lop())-> all(); 
            require 'view/lop/index.php';
        }

        public function create()
        {
            
            require 'view/lop/create.php';
        }
        
        public function store()
        {
            $ho = $_POST['ho'];
            $ten = $_POST['ten'];
            require 'model/Lop.php';
             (new Lop())-> create($ho,$ten);
            require 'view/lop/create.php';
        }

        public function edit()
        {
            $id = $_GET['id'];
            require 'model/Lop.php';
            $each= (new Lop())-> find($id);
            require 'view/lop/edit.php';
        }


        public function update()
        {
            $id = $_POST['id'];
            $ho = $_POST['ho'];
            $ten = $_POST['ten'];
            require 'model/Lop.php';
             (new Lop())-> update($id,$ho,$ten);
            
        }

        public function delete()
        {
            $id = $_GET['id'];
            
            require 'model/Lop.php';
             (new Lop())-> destroy($id);
            
        }



    }