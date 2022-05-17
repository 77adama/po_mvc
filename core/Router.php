<?php
namespace App\Core;
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
            }else{
                throw new RouteNotFoundException();
            }
        }else{
            throw new RouteNotFoundException();
        }
    }
}