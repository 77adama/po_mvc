<?php
namespace App\Controller;
use App\Core\Request;
use App\Core\Controller;
//video 7 => 45mn-21 creer controller
class SecurityController extends Controller{
    public function authentification(){
       //1affichage du formulaire de cnxion=> GET
       if($this->request->isGet()){
           $this->render('security/login.html.php');
       }
       
       //2 Traitement apres soumission => POST 
       

    }
    // public function Acceuil(){
    //     if($this->request->isPost()){
    //         $this->render('acceuil/acceuil.html.php');
    //     } 
    // }

    public function deconexion(){
        $this->redirectToRoute("login");
    }
}