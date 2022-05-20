<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Personne;
use App\Model\User;
class UserController  extends Controller{
    
    public function listerUser(){
        $user = User::findAll();
       
        $data = [
            
            "user" => $user
        ];
        $this->render('user/listeruser.html.php',$data);
    }
}
