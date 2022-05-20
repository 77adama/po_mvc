<?php
namespace App\Model;
class RP extends User{

    public function __construct(){
        self::$role="ROLE_RP";
     
   }

        //redefinition
    //     public static function findAll():array{
    //         $sql="select * from ".parent::table()."where role like ?";
    //         return  parent::findBy($sql,[self::$role],true);

    // }
    public static function findAll():array{
        $db=parent::database();
            $db->connexionBD();
            $sql="select * from ".parent::table()." where role like 'ROLE_RP'";
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
}