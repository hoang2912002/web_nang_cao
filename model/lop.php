<?php
    require_once 'model/connect.php';
    $connect = connect();
    
    function lop_index(){
        $connect = connect();
        $sql = "select * from lop";
        $result = mysqli_query($connect,$sql);
        mysqli_close($connect);
        return $result;
    }

    function lop_store($ten){
        $connect = connect();
        $sql = "insert into lop(ten)
                    values ('$ten')";
        $result = mysqli_query($connect,$sql);
        mysqli_close($connect);
    }

    function lop_edit($id){
        global $connect;
        $sql = "select * from lop where
                    id = '$id'";
        $result = mysqli_query($connect,$sql);
        $each = mysqli_fetch_array($result);
        mysqli_close($connect);
        return $each;
    
    }
    function lop_update($id,$ten){
        $connect = connect();
        $sql = "update lop 
                    set ten = '$ten' 
                    where
                    id = '$id'";
        $result = mysqli_query($connect,$sql);
        mysqli_close($connect);
    }
    
    function lop_delete($id){
        $connect = connect();
        $sql = "delete from lop where
                    id = '$id'";
        $result = mysqli_query($connect,$sql);
        mysqli_close($connect);
    }

    // switch($action){

        
    //     case 'update':
    //         $sql = "update lop 
    //                 set ten = '$ten' 
    //                 where
    //                 id = '$id'";
    //         $result = mysqli_query($connect,$sql);
    //         header('location:index.php?controller=lop');
    //         break;
    //     case 'delete':
    //         $sql = "delete from lop where
    //                 id = '$id'";
    //         $result = mysqli_query($connect,$sql);
    //         header('location:index.php?controller=lop');
    //         break;
    // };