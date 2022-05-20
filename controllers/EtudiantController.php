<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Personne;
use App\Model\Etudiant;
class EtudiantController extends Controller{

    public function inscrireEtudiant(){

    }
    public function listerEtudiant(){
        $etudiant = Etudiant::findAll();
       
        $data = [
           
            "etudiant" => $etudiant,
        ];
        $this->render('etudiant/listeretudiant.html.php',$data);
    }
    public function inscriptionEtudiant(){
        if($this->request->isGet()){
        $this->render('inscription/inscriptionEtudiant.html.php');
        }else{
           /*  var_dump($_POST);
            die; */
            extract($_POST);
                $etu=new Etudiant();
                $etu->setNomComplet($nomComplet);
                $etu->setLogin($login);
                $etu->setPassword($password);
                $etu->setMatricule($matricule);
                $etu->setSexe($sexe);
                $etu->setAdresse($adresse);
                $etu->insert();
        $this->render('inscription/inscriptionEtudiant.html.php');
    
            // $this->render('professeur/listerprofesseur.html.php');
        }
    }
}