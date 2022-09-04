<?php
    //LopObject là đối tượng để biến nó thành model
    class LopObject{
        private $id;
        private $ho;
        private $ten;

        public function __construct($row)
        {
            //contruct là khởi tạo
            $this->id =$row['id'] ?? '';
            $this->ho =$row['ho'] ;
            $this->ten =$row['ten'] ;
        }

        public function get_id()
        {
            return $this->id;
        }
        public function set_id($var)
        {
            $this->id = $var;
        }
        public function get_ho()
        {
            return $this->ho;
        }
        public function set_ho($var)
        {
             $this->ho= $var;
        }
        public function get_ten()
        {
            return $this->ten;
        }
        public function set_ten($var)
        {
            $this->ten = $var;
        }
        
        public function get_ho_ten()
        {
            return $this->ho . '.' . $this->ten;
        }
    }