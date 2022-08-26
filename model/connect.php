<?php
    function connect(){
        $connect = mysqli_connect('localhost','root','','web_nang_cao');
        mysqli_set_charset($connect,'utf8');  
        return $connect; 
    }
