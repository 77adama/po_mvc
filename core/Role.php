<?php
namespace App\Core;
class Role{

    private Session $session;
    public function __construct(Session $session){
        $this->Session=$session;
    }
//c'est le role qui me permet est ce que l'utilisateur est connecter ou pas
    public static function isConnect(){

    }
    public static function isRP(){
        
    }
    public static function isAC(){
        
    }
    public static function isEtudiant(){
        
    }
}
