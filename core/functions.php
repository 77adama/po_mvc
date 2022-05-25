<?php
use App\Core\Session;
use App\Core\Role;
use App\Controller;
function dd($data):void{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}
function hidden(array $datas){
    foreach ($datas as $data) {
       return (Role::getRole()==$data)?"d-none":"";
    }
}
function hiddenNave(){
  return Session::isConnect() ? '': 'hidden';
    
}

function hiddenRole(array $datas){
  return Role::getRole() ? 'd-none' : '';
}