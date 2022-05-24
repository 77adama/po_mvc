<?php
use App\Core;
function dd($data):void{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}
function hidden(array $datas){
    foreach ($datas as $data) {
       return (Role::getRole()==$data)?"disabled":"";
    }
}