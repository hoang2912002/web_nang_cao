<?php
    require 'model/connect.php';
    class Lop
    {
        
        private int $id;
        private string $ho;
        private string $ten;

        public function get_id(){
            return  $this->id;
        }

        public function show_id(){
            return '#'. $this->id;
        }
        public function set_id($var){
            $this->id = $var;
        }

        public function get_ho(){
            return $this->ho;
        }
        public function set_ho($var){
            $this->ho = $var;
        }

        public function get_ten(){
            return $this->ten;
        }
        public function set_ten($var){
            $this->ten = $var;
        }

        
        public function get_ho_ten(){
            return $this->ho. '-' . $this->ten;
        }

        public function all()
        {
            
            $sql = "select * from lop";
            $result = (new Connect())->select($sql);
            
            $arr = [];
            foreach($result as $row){
                $object = new self();
                $object->set_id($row['id']);
                $object->set_ho($row['ho']);
                $object->set_ten($row['ten']);
                $arr[] = $object;
            }
            return $arr;
        }

        public function create($ho,$ten)
        {
            $object = new self();
            $object->set_ho($ho);
            $object->set_ten($ten);

            $sql = "insert into lop(ho,ten)
                    values ('{$object->ho}','{$object->ten}')";
            
            (new Connect())->excute($sql);
        }

        public function find($id)
        {
            $sql = "select * from lop
            where id = '$id'";
            $result = (new Connect())->select($sql);
            $row = mysqli_fetch_array($result);
            $arr = [];
            
                $object = new self();
                $object->set_id($row['id']);
                $object->set_ho($row['ho']);
                $object->set_ten($row['ten']);

            return $object;
        }

        public function update($id,$ho,$ten)
        {
            $object = new self();
            $object->set_id($id);
            $object->set_ho($ho);
            $object->set_ten($ten);


            $sql = "update lop
                    set ho = '$object->ho',
                        ten = '$object->ten'
                    where 
                        id = '$object->id'";
            
            (new Connect())->excute($sql);
        }

        public function destroy($id)
        {
            

            $sql = "delete from  lop
                    where 
                        id = '$id'";
            
            (new Connect())->excute($sql);
        }

    }