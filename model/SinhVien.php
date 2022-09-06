<?php
    require 'model/SinhVienObject.php';
    require_once 'model/Connect.php';
    class SinhVien{
        private string $table = 'sinh_vien';
        public function all()
        {
            $sql = "select  t.*,lop.ten as ten_lop from $this->table as t
                    join lop on lop.id = t.id_lop";
            $result = (new Connect())->select($sql);
            $arr = [];
            foreach ($result as $row){
                $object = new SinhVienObject($row);
                $arr[] = $object;
            }
            return $arr;
        }

        public function create($params)
        {
            $object = new SinhVienObject($params);
            
            $sql = "insert into $this->table (ten,id_lop)
                    values ('" . $object->get_ten() ."','". $object->get_id_lop() . "')";
           (new Connect())->execute($sql);

        }

        public function find($id) : object
        {
            $sql = "select * from $this->table 
                    where id = '$id'";
            $result = (new Connect())->select($sql);
            $each = mysqli_fetch_array($result);
            return new SinhVienObject($each);
        }

        public function update(array $params)
        {
            $object = new SinhVienObject($params);
            $sql= "update $this->table set 
                    id_lop = '". $object->get_id_lop()."',
                    ten = '". $object->get_ten()."'
                    where
                    id = '". $object->get_id()."'
                    ";
            (new Connect())->execute($sql);
        }

        public function delete($id)
        {
            $sql= "delete from $this->table 
                    where id = '$id'";
            (new Connect())->execute($sql);
        }
    }