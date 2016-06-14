<?php
    class index{
        public function __construct(){
            include 'define.php';
        }
        public function viewAll(){
         $sql ="SELECT*FROM $this->table ORDER BY id";
         $stmt=$this->prepare($sql);
         $stmt->execute();
            while($obj=$stmt->fetch(PDO::FETCH_LAZY)){
                $data[]=$obj;
            }
        }
        public function insert_data($id, $nama){
            $sql="INSERT INTO $this->table (id, nama) value ($this->id, $this->nama)";
            $stmt=$this->koneksi->prepare($sql);
            $stmt->execute();
        }
    }
?>
