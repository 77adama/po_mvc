<?php
namespace App\Controller;
use App\Core\Controller;
class AcceuilController  extends Controller{
    public function Acceuil(){
        if($this->request->isGET()){
            $this->render('acceuil/acceuil.html.php');
        }else{
            $this->render('acceuil/acceuil.html.php');
           }
    }
}