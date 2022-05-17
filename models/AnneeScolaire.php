<?php
namespace App\Model;
use App\Core\Model;
class AnneeScolaire extends Model{



//function navigationnelles
    //OneToMany=>Inscription
    public function inscription():array{
        return [];
    }

//     //Redefinition des fonctions de IModel
// public function insert():int{
//     return 0;
// }
//     public function delete():int{
//         return 0;
//     }
//     public function update():int{
//         return 0;
//     }
//     public function findAll():array{
//         return [];
//     }
//     public function findById():object|null{
//         return null;
//     }
//     public function findBy(string $sql,array $data=null,$single=false):object|null|array{
//         return null;
//     }
}