<?php
    switch($action){
        case '':
            require 'model/lop.php';
            $result = lop_index();
            require 'view/lop/index.php';
            break;
        case 'create':
            require 'view/lop/create.php';
            break;
        case 'store':
            $ten = $_POST['ten'];
            require 'model/lop.php';
            lop_store($ten); 
            break;
        case 'edit':
            $id = $_GET['id'];
            require 'model/lop.php';
            $each = lop_edit($id);
            require 'view/lop/edit.php';
            break;
        case 'update':
            $id = $_POST['id'];
            $ten = $_POST['ten'];
            require 'model/lop.php';
            lop_update($id,$ten);
            header('location:index.php?controller=lop');
            break;
        case 'delete':
            $id = $_GET['id'];
            require 'model/lop.php';
            lop_delete($id);
            header('location:index.php?controller=lop');
            break;
        default:
            echo 'Nhập action của lớp sai';
            break;
    };
    