<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Professeur;
// use App\Model\Personne;
class InscriptionController  extends Controller{
    
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
        $this->render('inscription/inscription.html.php');

            // $this->render('professeur/listerprofesseur.html.php');
        }
    }
}