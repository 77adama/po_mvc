<?php
namespace App\Controller;
use App\Core\Controller;
class ProfesseurController extends Controller{


    public function affecterClasse(){
        
        $this->render('professeur/affecterclass.html.php');
    }

    public function listerProfesseur(){
        
    }
}