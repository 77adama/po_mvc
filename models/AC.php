<?php
namespace App\Model;
class AC extends User{

//on va representer un OneToMany avc Inscription
    //1ere approche
    private array $inscriptions;
    //2eme approche
    //function navigationnelles =>function issues des associations
    public function inscription():array{
        return [];
    }

    public function __construct(){
        parent::$role="ROLE_AC";
        // echo $ac->getRole();
        $this->inscriptions=[];
    }

     //redefinition
     public static function findAll():array{
        $db=parent::database();
            $db->connexionBD();
            $sql="select * from ".parent::table()." where role like 'ROLE_AC'";
            $result=$db->executeSelect($sql);
            $db->closeConnexion();
            return $result;
}

public function insert():int{
    $db=parent::database();
    $db->connexionBD();
    // var_dump($db) ;die;
    $sql="INSERT INTO `personne` (`nom_complet`, `role`,`login`,password) VALUES (?,?,?,?)";
    $results=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->login,$this->password]);
    $db->closeConnexion();
    return $results;

}

//Redefinition des fonctions de IModel
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