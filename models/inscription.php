<?php
namespace App\Model;
use App\Core\Model;
class Inscription extends Model{
    //atribut de navigation : ce sont des attributs issus des relations 
    //sont egalement des atribut d'instance
    private int $id;
    private int $ac_id;
    private int $annee_id;
    private int $classe_id;
    private int $etudiant_id;

    public function __construct(){
        self::$table='inscription';
    }

    //ManyTOWone=>AC
    public function ac():AC{
        $sql="select a .* from inscription i,
         where a.id=i.annee_id
         and i.id=".$this->id;


        return new AC();
    }

    //ManyTOWone=>AnneScolaire
    public function annescolaire():AnneeScolaire{
        $sql="select a.* from annee_scolaire a,".parent::table()."i,personne
        p where p.id=i.ac_id
        and p.role like 'ROLE_AC'
        and i.id=".$this->id;
        echo $sql;
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
     * Get the value of ac_id
     */ 
    public function getAc_id()
    {
        return $this->ac_id;
    }

    /**
     * Set the value of ac_id
     *
     * @return  self
     */ 
    public function setAc_id($ac_id)
    {
        $this->ac_id = $ac_id;

        return $this;
    }

    /**
     * Get the value of annee_id
     */ 
    public function getAnnee_id()
    {
        return $this->annee_id;
    }

    /**
     * Set the value of annee_id
     *
     * @return  self
     */ 
    public function setAnnee_id($annee_id)
    {
        $this->annee_id = $annee_id;

        return $this;
    }

    /**
     * Get the value of classe_id
     */ 
    public function getClasse_id()
    {
        return $this->classe_id;
    }

    /**
     * Set the value of classe_id
     *
     * @return  self
     */ 
    public function setClasse_id($classe_id)
    {
        $this->classe_id = $classe_id;

        return $this;
    }

    /**
     * Get the value of etudiant_id
     */ 
    public function getEtudiant_id()
    {
        return $this->etudiant_id;
    }

    /**
     * Set the value of etudiant_id
     *
     * @return  self
     */ 
    public function setEtudiant_id($etudiant_id)
    {
        $this->etudiant_id = $etudiant_id;

        return $this;
    }
}