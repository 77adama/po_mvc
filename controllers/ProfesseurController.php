<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Professeur;
use App\Core\Model;
// use App\Model\Request;
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
            
            $result=$pr->insert();
    $this->render('inscription/inscriptionProf.html.php',["insert"=>$result]);

        // $this->render('professeur/listerprofesseur.html.php');
    }
}
        public function detail($id){
            // dd("detail",$idProf);
           $prof= Professeur::findById($id); 
           $titre="INFORMATION DE : ".strtoupper($prof->nom_complet);
           $grade="GRADE :".$prof->grade;
        //    var_dump($prof);die();
        $this->render('professeur/detail.html.php',
        [
            "titre" => $titre,
            "grade"=>$grade
    ]
);


        }

}