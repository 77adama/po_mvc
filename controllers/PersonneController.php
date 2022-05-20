<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Personne;
class PersonneController extends Controller{
    
    public function lister(){
        
            $pers = Personne::findAll();
       
        $data = [
            // "titre"=> "Liste des professeurs",
            "pers" => $pers,
        ];
        $this->render('personne/liste.html.php',$data);
    
}
}