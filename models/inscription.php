<?php
namespace App\Model;
use App\Core\Model;
class Inscription extends Model{
    //atribut de navigation : ce sont des attributs issus des relations 
    //sont egalement des atribut d'instance
    
    private int $id;

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
}