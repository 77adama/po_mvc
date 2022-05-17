<?php
namespace App\Core;
interface IModel{
    //les methode dans l'interface sont absraites

    //instance
    public function insert():int; //quoi
    public function update():int;

    //static
    public static function delete(int $id):int;
    public static function findAll():array;
    public static function findById(int $id):object|null;
    public static function findBy(string $sql,array $data=null,$single=false):object|null|array;


    //select*from personne where nom_complet like "Diop"
    //select * from personne where login=douve and password=douve
}

//method static => classe une method qu'on pe apele sans bsoin des attribut de la class

/**
 * par exemple Classe::methode
 * 
 * classe::delete(1) //delete from class where id=1
 * classe::findAll() //select * from class
 * classe::inset([1,"Classe1","niveau","fliere"])
 *  //insert into classe (libelle,niveau,fliere)values(classe1,niveau,fliere)
 */

//method intances => method objet ici on doit creer un objet

//la method d'inst a bsoin de l'etat de l'objet =>valeurs de ses attributs

/**
 * $obj= new classe()
 * par exemple $objet->methode()
 */
/**
 * $obj= new classe()
 * $obj->setId(1)
 * $obj->setLibelle("classe 1")
 * $obj->update() 
 * //update from classe set libelle='classe 1' where id=1
 * 
 *  $obj= new classe()
 * $obj->setId(1)
 * $obj->delete() //delete from class where id=1
 */