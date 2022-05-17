<?php
use App\Core\Router;
use App\Controller\SecurityController;
use App\Controller\ClasseController;
use App\Controller\PersonneController;
use App\Controller\ModuleController;
use App\Controller\ProfesseurController;
use App\Exception\RouteNotFoundException;

//resolution des routes
$router=new Router();
//Chemin relatif SecurityController=> use App\Controller\SecurityController
//chemin absolu use App\Controller\SecurityController=> SecurityController::class

//definition des routes => c'est l'ajout des routes dans le tableau
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconexion"]);
$router->route('/classes',[ClasseController::class,"listerClasse"]);
$router->route('/add-classe',[ClasseController::class,"creerClasse"]);
$router->route('/personnes',[PersonneController::class,"lister"]);
$router->route('/ajoumodule',[ModuleController::class,"ajouterModule"]);
$router->route('/affecterclasse',[ProfesseurController::class,"affecterClasse"]);

//resolution des routes => rechercher si la route se trouve dans le tableau 
try{
    //essaie de resoudre la route
    $router->resolve();
}catch(RouteNotFoundException $ex){
    //capture l'exception et affiche le
    echo $ex->message;
}

