<?php
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    switch($action){
        case '' :
            require 'model.php';
            require './view/index.php';
            break;
        case 'create':
            require './view/create.php';
            break;
        case 'store':
            $ten = $_POST['ten'];
            require 'model.php';
            header('location:index.php');
            break;
        case 'edit':
            $id = $_GET['id'];
            require 'model.php';
            require './view/edit.php';
            break;
        case 'update':
            $ten = $_POST['ten'];
            $id = $_POST['id'];
            require 'model.php';
            header('location:index.php');
            break;
        case 'delete':
            $id = $_GET['id'];
            require 'model.php';
            header('location:index.php');
            break;
        default :
            echo "ahdhsahd";
    }
    