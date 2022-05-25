<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Personne;
use App\Model\AC;
class ACController  extends Controller{
    
    public function listerAC(){
        $ac = AC::findAll();
       
        $data = [
            "ac" => $ac
        ];
        $this->render('ac/listerac.html.php',$data);
    }
    public function inscriptionAC(){
        if($this->request->isGet()){
        $this->render('inscription/inscriptionAC.html.php');
        }else{
           /*  var_dump($_POST);
            die; */
            extract($_POST);
                $ac=new AC();
                $ac->setNomComplet($nomComplet);
                $ac->setLogin($login);
                $ac->setPassword($password);
                $ac->insert();
        $this->render('inscription/inscriptionAC.html.php');
    
            // $this->render('professeur/listerprofesseur.html.php');
        }
    }
}
