<?php
namespace App\Controller;
use App\Core\Controller;
class ClasseController  extends Controller{
    

    public function listerClasse(){
        $this->render('classe/listerclass.html.php');
    }

    public function creerClasse(){
        $this->render('classe/creerclass.html.php');
            
    }
}