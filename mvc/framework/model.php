<?php

class Table {

    function __construct($pdo,$table){
        $this->pdo=$pdo;
        $this->table=$table;
    }

    function getall(){
        if(!preg_match('/^[a-z][-a-z0-9]*$/', $this->table)){
            die('');
        }
        $data=$this->pdo->query("SELECT * FROM $this->table");
        return $data->fetchAll(PDO::FETCH_ASSOC);
    }

    function getone($id){
        if(!preg_match('/^[a-z][-a-z0-9]*$/', $this->table)){
            die('');
        }
        $data=$this->pdo->prepare("SELECT * FROM $this->table WHERE id=?");
        $data->execute(array($id));
        return array_pop($data->fetchAll(PDO::FETCH_ASSOC));
    }

    function save($data){
        if(!preg_match('/^[a-z][-a-z0-9]*$/', $this->table)){
            die('');
        }
        if(@$data['id']){
            $q="UPDATE $this->table SET ";
            foreach($data as $k=>$v){
                $q.="$k='$v',";
            }
            $q=substr($q,0,-1);
            $q.=" WHERE id=".$data['id'];
        }else{
            $q="INSERT INTO $this->table (";
            $q.=join(",",array_keys($data));
            $q.=") VALUES ('";
            $q.=join("','",array_values($data));
            $q.="')";
        }
        $this->pdo->query($q);
    }

    function delete($id){
        $this->pdo->query("DELETE FROM $this->table WHERE id=$id");
    }

}
