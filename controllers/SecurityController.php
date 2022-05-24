<?php
namespace App\Controller;
use App\Core\Request;
use App\Core\Session;
use App\Core\Controller;
use App\Model\User;
use App\Model\Professeur;
//video 7 => 45mn-21 creer controller
class SecurityController extends Controller{
    public function authentification(){
       //1affichage du formulaire de cnxion=> GET
       if($this->request->isGet()){
           $this->render('security/login.html.php');
       }else{ 
           
        extract($_POST);
      $user= User::findUserByLoginAndPassword($login,$password);
    // dd($user);
        //1-Recuperer les données et tester si User exist
        //2-Sauvegarder les données de user dans la session
        //3-Redirection dans la page Appropriée
        if ($user) {
            $_SESSION["user-connect"] = $user;

            $roleUser=Session::getRoleUserSession();
          
            if ($roleUser=="ROLE_AC") {
                // $profs = Professeur::findAll();
                // dd($profs);
                $this->redirectToRoute("acceuil");
       
            }else{
                $this->redirectToRoute("acceuil");
                // dd("vous n'etes pas AC");
            }
        
        }else{
            $this->redirectToRoute("login");
        }
        // dd($_SESSION["user-connect"]->role);
     }
       
       //2 Traitement apres soumission => POST 
       

    }
    // public function Acceuil(){
    //     if($this->request->isPost()){
    //         $this->render('acceuil/acceuil.html.php');
    //     } 
    // }

    public function deconexion(){
        unset($_SESSION["user-connect"]);
        $this->redirectToRoute("login");
    }
}