<?php
namespace App\Core;

class Database{
    //declaration d'une variable de type \PDO
    private \PDO|null $pdo=null;

    public function connexionBD():void{
        $this->pdo= new \PDO("mysql:dbname=poo_mvc;host=127.0.0.1:3308", "root", "");
        // var_dump($this->pdo); die;
    }

    public function closeConnexion():void{
        $this->pdo=null;
    }
//vidéo 7=> 1H-16
    public function executeSelect(string $sql,array $data=[],bool $single=false):object|array|null{
//on appel la method => c'est la function prepare et lui donne la method
        $query=$this->pdo->prepare($sql);
        $query->execute($data);
        if ($single){
            $result=$query->fetch(\PDO::FETCH_OBJ);
            if($query->rowCount()==0) return null;
        }else{
            //si $single=false=>plusieurs result
            $result=$query->fetchAll(\PDO::FETCH_OBJ);
        }
        return $result;
    }
    public function executeUpdate(string $sql,array $data=[]):int{
        $query=$this->pdo->prepare($sql);
        $query->execute($data);
        return $query->rowCount();
    }
}