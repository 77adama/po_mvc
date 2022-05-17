<?php
namespace App\Model;
class Etudiant extends User{
    private string $matricule;
    private string $sexe;
    private string $adresse;

    public function __construct(){
        parent::$role="ROLE_Etudiant";
        // echo $ac->getRole();
    }


    public function insert():int{
    $db=parent::database();
    $db->connexionBD();
    // var_dump($db) ;die;
    $sql="INSERT INTO `personne` (`nom_complet`,`role`, `login`, password,`matricule`,`sexe`,`adresse`) VALUES (?,?,?,?,?,?,?)";
    $results=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->login,$this->password,$this->matricule,$this->sexe,$this->adresse]);
    $db->closeConnexion();
    return $results;
}


    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this; 
    }

       //redefinition
       public static function findAll():array{
        $sql="select * from ".parent::table()."where role like '".self::$role."'";
        echo $sql;
        return [];
}




}