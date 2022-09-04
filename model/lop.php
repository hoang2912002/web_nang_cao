<?php
    require 'model/LopObject.php';
    require 'model/Connect.php';
    class Lop{

        public function all()
        {
            
            $sql = "select  * from lop";
            $result = (new Connect())->select($sql);
            $arr = [];
            foreach ($result as $row){
                $object = new LopObject($row);
                $arr[] = $object;
            }
            return $arr;
        }

        public function create($params)
        {
            $object = new LopObject($params);
            $sql = "insert into lop(ho,ten)
                    values ('" . $object->get_ho() ."','". $object->get_ten() . "')";
            
           (new Connect())->execute($sql);

        }

        public function find($id) : object
        {
            
            $sql = "select * from lop 
                    where id = '$id'";
            $result = (new Connect())->select($sql);
            $each = mysqli_fetch_array($result);
            return new LopObject($each);
        }

        public function update(array $params)
        {
            $object = new LopObject($params);
            $sql= "update lop set 
                    ho = '". $object->get_ho()."',
                    ten = '". $object->get_ten()."'
                    where
                    id = '". $object->get_id()."'
                    ";
            (new Connect())->execute($sql);
        }

        public function delete($id)
        {
            
            $sql= "delete from lop 
                    where id = '$id'";
            (new Connect())->execute($sql);
        }
    }