<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Classe;
class ClasseController  extends Controller{
    

    public function listerClasse(){
        $classe = Classe::findAll();
       
        $data = [
           
            "classe" => $classe,
        ];
        $this->render('classe/listerclass.html.php',$data);
    }

    public function creerClasse(){
        if($this->request->isGet()){
            $this->render('inscription/creerclasse.html.php');
            }else{
               /*  var_dump($_POST);
                die; */
                extract($_POST);
                    $pr=new Classe();
                    $pr->setLibelle($libelle);
                    $pr->setFliere($fliere);
                    $pr->setNiveau($niveau);
                    $pr->insert();
            $this->render('inscription/creerclasse.html.php');
            
    }
}
}