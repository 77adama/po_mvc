<?php
namespace App\Core;
use App\Core\Session;
class Role{

    private Session $session;
    public function __construct(Session $session){
        $this->Session=$session;
    }
//c'est le role qui me permet est ce que l'utilisateur est connecter ou pas
    public static function isConnect(){
        return isset($_SESSION['user-connect']);
    }
    public static function isRP(){
       return self::is_connect() && $_SESSION['user-connect']['role']="ROLE_RP";
        
    }
    public static function isAC(){
         return self::is_connect() && $_SESSION['user-connect']['role']="ROLE_AC";
        
    }
    public static function isEtudiant(){
       return self::is_connect() && $_SESSION['user-connect']['role']="ROLE_Etudiant";
        
    }
    public static function is(){
        return self::is_connect() && ($_SESSION['user-connect']['role']="ROLE_Etudiant" || $_SESSION['user-connect']['role']="ROLE_AC" || $_SESSION['user-connect']['role']="ROLE_RP");
            
    }
    public static function getRole(){
        return $_SESSION['user-connect']->role;
            
    }
}


// <?php

// use App\Core\Session;

// class Role{
//     private Session $session;

//     public function __construct(Session $session)
//     {
//         $this->session = $session;
//     }
//     public static function is_connect():bool{
//         return isset($_SESSION['user-connect']);
//     }
//     public static function is(){
//         return self::is_connect() && ($_SESSION['user-connect']['role']="ROLE_Etudiant" || $_SESSION['user-connect']['role']="ROLE_AC" || $_SESSION['user-connect']['role']="ROLE_RP");
//     }
    
//     public static function is_RP(){
//         return self::is_connect() && $_SESSION['user-connect']['role']="ROLE_RP";
//     }
    
//     public static function is_AC(){
//         return self::is_connect() && $_SESSION['user-connect']['role']="ROLE_AC";
//     }

//     public static function is_Etudiant(){
//         return self::is_connect() && $_SESSION['user-connect']['role']="ROLE_Etudiant";
//     }
// }