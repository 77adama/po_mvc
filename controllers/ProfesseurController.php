<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Professeur;
class ProfesseurController extends Controller{


    public function affecterClasse(){
       
        $this->render('professeur/affecterclass.html.php');
    }

    public function listerProfesseur(){
        if($this->request->isGet()){
        $profs = Professeur::findAll();
       
        $data = [
            "titre"=> "Liste des professeurs",
            // "titre"=> $title,
            "profs" => $profs
        ];
        $this->render('professeur/listerprofesseur.html.php',$data);
    }
}

public function inscriptionProf(){
    if($this->request->isGet()){
    $this->render('inscription/inscriptionProf.html.php');
    }else{
       /*  var_dump($_POST);
        die; */
        extract($_POST);
            $pr=new Professeur();
            $pr->setNomComplet($nomComplet);
            $pr->setGrade($grade);
            $pr->insert();
    $this->render('inscription/inscriptionProf.html.php');

        // $this->render('professeur/listerprofesseur.html.php');
    }
}
}