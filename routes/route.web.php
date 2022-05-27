<?php
use App\Core\Router;
use App\Controller\SecurityController;
use App\Controller\ClasseController;
use App\Controller\PersonneController;
use App\Controller\ModuleController;
use App\Controller\ProfesseurController;
use App\Controller\ACController;
use App\Controller\RPController;
use App\Controller\UserController;
use App\Controller\EtudiantController;
use App\Controller\InscriptionController;
use App\Controller\AcceuilController;
use App\Exception\RouteNotFoundException;


//resolution des routes
$router=new Router();
//Chemin relatif SecurityController=> use App\Controller\SecurityController
//chemin absolu use App\Controller\SecurityController=> SecurityController::class

//definition des routes => c'est l'ajout des routes dans le tableau
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconexion"]);
$router->route('/acceuil',[AcceuilController::class,"acceuil"]);
$router->route('/classes',[ClasseController::class,"listerClasse"]);
$router->route('/add-classe',[ClasseController::class,"creerClasse"]);
$router->route('/personnes',[PersonneController::class,"lister"]);
$router->route('/ajoumodule',[ModuleController::class,"ajouterModule"]);
$router->route('/affecterclasse',[ProfesseurController::class,"affecterClasse"]);
$router->route('/listeprof',[ProfesseurController::class,"listerProfesseur"]);
$router->route('/detailprof',[ProfesseurController::class,"detail"]);
$router->route('/listerac',[ACController::class,"listerAC"]);
$router->route('/listeretudiant',[EtudiantController::class,"listerEtudiant"]);
$router->route('/listerrp',[RPController::class,"listerRP"]);
$router->route('/listeruser',[UserController::class,"listerUser"]);
$router->route('/inscrireProf',[ProfesseurController::class,"inscriptionProf"]);
$router->route('/inscrireac',[ACController::class,"inscriptionAC"]);
$router->route('/inscrirerp',[RPController::class,"inscriptionRP"]);
$router->route('/inscrireetudiant',[EtudiantController::class,"inscriptionEtudiant"]);
$router->route('/inscriretudiant',[InscriptionController::class,"inscrireEtudiant"]);

//resolution des routes => rechercher si la route se trouve dans le tableau listerEtudiant
try{
    //essaie de resoudre la route 
    $router->resolve();
}catch(RouteNotFoundException $ex){
    //capture l'exception et affiche le
    echo $ex->message;
}

