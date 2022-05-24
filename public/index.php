<?php
session_start();
// var_dump($_SESSION);
require_once("../core/erreur.php");
erreur();
//  ini_set('display_errors', 1);
//    ini_set('display_startup_errors', 1);
//   error_reporting(E_ALL);
//1inclure le phichier de la class
// use App\Controller\SecurityController;
// use App\Controller\ClasseController;
// use App\Exception\RouteNotFoundException;
// use App\Core\Router;
require("../vendor/autoload.php");
require_once("../core/functions.php");
require_once("../routes/route.web.php");
// use App\Model\Professeur;
// use App\Model\Etudiant; //et ilva faire=> require_once("../models/Professeur.php");
// use App\Model\AC;
// use App\Model\RP;



// $request=new Request;
// $request->getUri();
// dd($request->isGet());
// dd($request->isPost());
// require_once("../core/IModel.php");
// require_once("../core/Model.php");
// require_once("../models/Personne.php");
// require_once("../models/User.php");
// require_once("../models/RP.php");
// require_once("../models/AC.php");
// require_once("../models/Professeur.php");
// require_once("../models/Classe.php");
// require_once("../models/AnneeScolaire.php");
// require_once("../models/Inscription.php");
//2creer objet ou instanciation
// $pers1=new Personne(); 
//appel de la classe nommer constructeur (faite par new Personne)
//3 donner un etat a un objet : c'est la valeur de ses attributs en un instant t
//-> : opérateur de porté d'instance(objet)
//$pers-> interface de la classe
//(tous attributs et methodes publics de la classe)

//comentet///////////////////
//  $pers1->setId(1);
//  $pers1->setNomComplet('baila Wane');

//  $pers2=new Personne(); 
//  $pers2->setId(2)
//       ->setNomComplet('Aly Tall Niang');

//  echo $pers1->getId();
//  echo $pers1->getNomComplet();
//fin///////////////////

// //Methode statique
// Personne::setNbrePersonne(12);
// echo Personne::getNbrePersonne();

// $pers2=new User(); 
//   $pers2->setId(2)
//        ->setNomComplet('Aly Tall Niang');
//  $pers2->affiche();

// $ac= new AC();
// echo $ac->getRole();
// $ins=new Inscription();
// $ins->ac();
// $ins->annescolaire();
// User::table();
// $personne=Perssonne();
// echo Personne::table(); //Personne=>table personne
// echo User::table(); //User=>table personne
// echo RP::table(); //RP=>table personne
// Personne::findAll(); //select * from personne
// User::findAll(); //select * from personne where role not like ROLE_PROFESEUR
    // Classe::findById(1);
    // $ac=new AC();
    // $ac->setNomComplet("khady seck");
    // $ac->setLogin("gf");
    // $ac->setPassword("foshj");
    // $ac->insert();
    // $ac=new RP();
    // $ac->setNomComplet("ablayd seck");
    // $ac->setLogin("grf2");
    // $ac->setPassword("fodljshj");
    // $ac->insert();
    // $pr=new Professeur();
    // $pr->setNomComplet("Abdou fall");
    // $pr->setGrade("ingenieur");
    // $pr->insert();
    // var_dump(Professeur());
    // dd($ac->insert());
    // $etudiant= new Etudiant();
    // $etudiant->setNomComplet("ALla ndaw");
    // $etudiant->setLogin("annbv");
    // $etudiant->setPassword("angf");
    // $etudiant->setMatricule("24a");
    // $etudiant->setSexe("M");
    // $etudiant->setAdresse("thiaroye");
    // $etudiant->insert();
    // // echo "<pre>";
    // var_dump($etudiant);
    // die();
    // echo $etudiant->insert();
    // $user= User::findAll();
    // $userConnect=User::findUserByLoginAndPassword("AM","AM");
    // dd($userConnect);
    // AnneeScolaire::findAll();
// AC::findAll(); //select * from personne where role like ROLE_AC
// var_dump(AC::findAll());
// Professeur::findAll(); //select * from personne where role like ROLE_PROFESEUR
// var_dump(Professeur::findAll());
//composer => outil de gestionnaire de dependance
//dependance => c'est toute les classes externes que l'on peut ajouter dans 
//son projet pour avoir des fonctionalites supplementaires
//gestionnaire => logiciel qu'il faut installer dont l'objectif est de telecharger
//une dependance et de la configurer dans le projet

//hup de dependance=> site ou on regroupe toutes dependances du language
//https://packagist.org/