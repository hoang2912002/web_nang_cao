<?php
    require_once 'model/connect.php';
    
    function sinh_vien_index(){
        $connect = connect();
        $sql = "select sinh_vien.*,lop.ten as ten_lop from sinh_vien
                left join lop on lop.id = sinh_vien.id_lop";
        $result = mysqli_query($connect,$sql);
        mysqli_close($connect);
        return $result;
    }

    function sinh_vien_store($ten,$id_lop){
        $connect = connect();
        $sql = "insert into sinh_vien(ten,id_lop)
                    values ('$ten','$id_lop')";
        $result = mysqli_query($connect,$sql);
        mysqli_close($connect);
    }

    function sinh_vien_edit($id){
        $connect = connect();
        $sql = "select * from sinh_vien where
                    id = '$id'";
        $result = mysqli_query($connect,$sql);
        $each = mysqli_fetch_array($result);
        mysqli_close($connect);
        return $each;
    
    }
    function sinh_vien_update($id,$ten,$id_lop){
        $connect = connect();
        $sql = "update sinh_vien 
                    set ten = '$ten',
                    id_lop = '$id_lop'
                    where
                    id = '$id'";
        $result = mysqli_query($connect,$sql);
        mysqli_close($connect);
    }
    
    function sinh_vien_delete($id){
        $connect = connect();
        $sql = "delete from sinh_vien where
                    id = '$id'";
        $result = mysqli_query($connect,$sql);
        mysqli_close($connect);
    }

    // switch($action){

        
    //     case 'update':
    //         $sql = "update sinh_vien 
    //                 set ten = '$ten' 
    //                 where
    //                 id = '$id'";
    //         $result = mysqli_query($connect,$sql);
    //         header('location:index.php?controller=sinh_vien');
    //         break;
    //     case 'delete':
    //         $sql = "delete from sinh_vien where
    //                 id = '$id'";
    //         $result = mysqli_query($connect,$sql);
    //         header('location:index.php?controller=sinh_vien');
    //         break;
    // };