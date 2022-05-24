<?php
namespace App\Core;
// use App\Core\Session;
use App\Exception\RouteNotFoundException;
class Router{

    private Request $request;

    public function __construct(){
        $this->request=new Request;
    }

    private array $routes=[];
    public function route(string $uri,array $action){
        $this->routes[$uri]=$action;
    }
//video 9 => 1h-4
    public function resolve(){
        $uri="/". $this->request->getUri()[0];
        if(isset($this->routes[$uri])){
            $route=$this->routes[$uri];
            [$ctrClass,$action]=$route;
            if(class_exists($ctrClass) && method_exists($ctrClass,$action)){
                $ctrl=new $ctrClass($this->request); 
                // $ctrl= new security controller($this->request)=>apel du __construct()
                // $ctrl->{$action()};
                call_user_func(array($ctrl,$action));
                //Les vues accessibles sans connexion
                // Pour que toutes les pages accessibles ajouter * dans le tableau
                $free = ["SecurityController/authentification"];
                $freetest=explode("\\",$ctrl::class)[2]."/".$action;
                // dd($ctrl::class);
                if (in_array("*",$free) || in_array($freetest,$free)) { //les Pages accessibles par Tout le monde
                    call_user_func(array($ctrl,$action));
                }elseif(Session::isConnect()){ // Tester si session existe
                    call_user_func(array($ctrl,$action));
                }else {
                    //Redirection vers login
                    // throw new RouteNotFoundException();
                }
            }else{
                throw new RouteNotFoundException();
            }
        }else{
            throw new RouteNotFoundException();
        }
    }
}