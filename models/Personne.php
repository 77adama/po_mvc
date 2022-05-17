<?php
namespace App\Model;
use App\Core\Model;
//class concrete :il produit des objet et il est par defaut differnet class abstriate
//une classe c'est des attribut et des méthods
//une classe concrette ne contient que des --methodes concretes:c'est une methode dont on connait la définition
//une methodes abstrate , une méthode dont on ne connait pas sa définition
//classe abstriate qui ne produit pas des objets
//class final qui ne peuvent pas avoir de class fils(une relation de spécialisation)
abstract class Personne extends Model{
    //atribut instance ils sont spécifique
    protected int $id;
    protected   string $nomComplet;
    protected static string $role;
    //attribut classe ou static
    //un attribut static sera obligatoirement appele par une méthode static
    private static int $nbrePersonne;
    
    //contructeur par defaut
    public function __construct(){
        // parent::$table='personne';
    }
    
    //getters 
    public function getId():int{
        return $this->id;
    }
    public function getNomComplet():string{
        return $this->nomComplet;
    }
    //::operateur de porté de class
    public static function getNbrePersonne():int{
        return self::$nbrePersonne;
    }

    //setters
    public function setId(int $id) :self{
        $this->id=$id;
        return $this;
    }
    public function setNomComplet(string $nonComplet): void{
        $this->nomComplet=$nonComplet;
    }

    public static function setNbrePersonne(int $nbrePersonne):void{
         self::$nbrePersonne=$nbrePersonne;
    }
//redefinition
    
}