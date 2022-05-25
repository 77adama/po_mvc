<?php
namespace App\Model;
use App\Core\Model;
class Classe extends Model{
    protected int $id;
    protected   string $libelle;
    protected string $fliere;
    protected   string $niveau;
 

    public function __construct(){
        // self::$table='classe';
    }

    public function insert():int{
        $db=parent::database();
        $db->connexionBD();
        // var_dump($db) ;die;
        $sql="INSERT INTO `classe` (`libelle`, `fliere`, `niveau`) VALUES (?,?,?)";
        $result=$db->executeUpdate($sql,[$this->libelle,$this->fliere,$this->niveau]);
        $db->closeConnexion();
        return $result;

    }

    public static function findAll():array{
        $db=parent::database();
       $db->connexionBD();
       $sql="select * from ".parent::table();
  
       $result=$db->executeSelect($sql);
       $db->closeConnexion();
       return $result;
}

//     public static function findAll():array{
//         $sql="select * from ".parent::table() ;

//         return  self::findBy($sql);
// }

    //function navigationelles
    //ManyToMany=>Professeur
    public function professeurs():array|null{
        //video 9 => 28mn-18
        $sql="selct....";
        return parent::findById($sql,[$this->id]);
    }

    


    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of fliere
     */ 
    public function getFliere()
    {
        return $this->fliere;
    }

    /**
     * Set the value of fliere
     *
     * @return  self
     */ 
    public function setFliere($fliere)
    {
        $this->fliere = $fliere;

        return $this;
    }

    /**
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }
}