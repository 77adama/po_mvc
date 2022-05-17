<?php
namespace App\Model;
use App\Core\Model;
class Classe extends Model{

    public function __construct(){
        self::$table='classe';
    }

    //function navigationelles
    //ManyToMany=>Professeur
    public function professeurs():array|null{
        //video 9 => 28mn-18
        $sql="selct....";
        return parent::findById($sql,[$this->id]);
    }

    

}