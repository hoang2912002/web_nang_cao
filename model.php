<?php
    $connect = mysqli_connect('localhost','root','','web_nang_cao');
    mysqli_set_charset($connect,'utf8');
    $sql = 'select * from sinh_vien';
    $result = mysqli_query($connect,$sql);  
    switch($action){
        case '' :
            $sql = 'select * from sinh_vien';
            $result = mysqli_query($connect,$sql);  
            break;
        
        case 'store':
            $sql ="insert into sinh_vien(ten)
                    values ('$ten')";
            $result = mysqli_query($connect,$sql);
            break;
        case 'edit':
            $sql = "select * from sinh_vien
            where id = '$id'";
            $result = mysqli_query($connect,$sql);
            $each = mysqli_fetch_array($result);  
            break;
        case 'update':
            $sql = "update sinh_vien 
            set ten = '$ten'
            where id = '$id'";
            $result = mysqli_query($connect,$sql);
            break;        
        case 'delete':
            $sql = "delete from sinh_vien 
            where id = '$id'";
            $result = mysqli_query($connect,$sql);
            break;        
    }
    mysqli_close($connect);