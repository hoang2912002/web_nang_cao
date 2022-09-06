<?php
    //LopObject là đối tượng để biến nó thành model
    class SinhVienObject{
        private $id;
        private $ten;
        private $id_lop;
        private $ten_lop;

        public function __construct($row)
        {
            //contruct là khởi tạo
            $this->id =$row['id'] ?? '';
            $this->ten =$row['ten'] ;
            $this->id_lop =$row['id_lop'] ;
            $this->ten_lop =$row['ten_lop'] ?? '';
        }

        public function get_id()
        {
            return $this->id;
        }
        public function set_id($var)
        {
            $this->id = $var;   
        }
       
        public function get_ten()
        {
            return $this->ten;
        }
        public function set_ten($var)
        {
            $this->ten = $var;
        }
        
       
        public function get_id_lop()
        {
            return $this->id_lop;
        }
        public function set_id_lop($var)
        {
            $this->id_lop = $var;
        }
        
        public function get_ten_lop()
        {
            return $this->ten_lop;
        }

    }