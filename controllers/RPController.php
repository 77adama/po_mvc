<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Personne;
use App\Model\RP;
class RPController extends Controller{
    
    public function listerRP(){
        $rp = RP::findAll();
       
        $data = [
            
            "rp" => $rp
        ];
        $this->render('rp/listerrp.html.php',$data);
    }
    public function inscriptionRP(){
        if($this->request->isGet()){
        $this->render('inscription/inscriptionRP.html.php');
        }else{
           /*  var_dump($_POST);
            die; */
            extract($_POST);
                $rp=new RP();
                $rp->setNomComplet($nomComplet);
                $rp->setLogin($login);
                $rp->setPassword($password);
                $rp->insert();
        $this->render('inscription/inscriptionRP.html.php');
    
            // $this->render('professeur/listerprofesseur.html.php');
        }
    }
}