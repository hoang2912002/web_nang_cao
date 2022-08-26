<?php
    switch($action){
        case '':
            require 'model/sinh_vien.php';
            $result = sinh_vien_index();
            require 'view/sinh_vien/index.php';
            break;
        case 'create':
            require 'model/lop.php';
            $lops = lop_index();
            require 'view/sinh_vien/create.php';
            break;
        case 'store':
            $ten = $_POST['ten'];
            $id_lop = $_POST['id_lop'];
            require 'model/sinh_vien.php';
            sinh_vien_store($ten,$id_lop); 
            header('location:index.php?controller=sinh_vien');
            break;
        case 'edit':
            $id = $_GET['id'];
            require 'model/sinh_vien.php';
            $each = sinh_vien_edit($id);
            require 'model/lop.php';
            $lops = lop_index();
            require 'view/sinh_vien/edit.php';
            break;
        case 'update':
            $id_lop = $_POST['id_lop'];
            $id = $_POST['id'];
            $ten = $_POST['ten'];
            require 'model/sinh_vien.php';
            sinh_vien_update($id,$ten,$id_lop);
            header('location:index.php?controller=sinh_vien');
            break;
        case 'delete':
            $id = $_GET['id'];
            require 'model/sinh_vien.php';
            sinh_vien_delete($id);
            header('location:index.php?controller=sinh_vien');
            break;
        default:
            echo 'Nhập action của lớp sai';
            break;
    };
    