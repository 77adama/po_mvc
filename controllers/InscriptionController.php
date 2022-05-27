<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Professeur;
use App\Model\Etudiant;
use App\Model\Classe;
use App\Model\Inscription;
// use App\Model\Personne;
class InscriptionController  extends Controller{
    
    public function inscrireEtudiant(){
        if($this->request->isGet()){
        $this->render('inscription/inscrireEtudiant.html.php');
        }else{
            extract($_POST);
            $etu=new Etudiant();
            $etu->setNomComplet($nomComplet);
            $etu->setLogin($login);
            $etu->setPassword($password);
            $etu->setMatricule($matricule);
            $etu->setSexe($sexe);
            $etu->setAdresse($adresse);
            $id=$etu->insert();
            if ($id>0) {
                $insctription=new Inscription();
                $insctription->setEtudiant_id($id);
                $insctription->setClasse_id($classe);
                $insctription->insert();
                $matricule= "MAT-".date("dmYhis");
                $etu->setMatricule($matricule);
                $etu->setId($id);
                $etu->update();
                $this->redirectToRoute("inscriretudiant");
            }else {
                dd("ERROR");
            }
    $this->render('inscription/inscrireEtudiant.html.php');
        }
    }
}