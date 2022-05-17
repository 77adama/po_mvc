<?php
namespace App\Model;
class Professeur extends Personne{
    private string $grade;

    public function __construct(){
         parent::$role="ROLE_PROFESSEUR";
       
    }


//function navigationelles
    //ManyToMany=>Classe
    public function classes():array{
        return [];
    }


    // inserte
    // update
    // delete


    //  selectAll() //select * from table;
    // selectById() //select * from table where id=1;


        //redefinition
        public static function findAll():array{
            $sql="select * from ? where role like 'ROLE_PROFESSEUR'";

            return  parent::findBy($sql,[parent::table()],true);
    }
   
    public function insert():int{
        $db=parent::database();
        $db->connexionBD();
        // var_dump($db) ;die;
        $sql="INSERT INTO `personne` (`nom_complet`, `role`, `grade`) VALUES (?,?,?)";
        $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->grade]);
        $db->closeConnexion();
        return $result;

    }


    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
}