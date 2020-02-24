<?php
require_once 'C:/wamp64/www/api/Model/Engins.php';
class Engin{

    //recuperation de la liste des engins
    static public function getAll(){
        $Role=array();
        $response = Engins::getAllEngins();
        
        //die(print_r($Role));
        return json_encode($response,true);
    }

    static public function getAllRoles(){
        $Role=array();
        $response = Engins::getAllEngins();
        foreach($response as $e){
        $Var= Engins::getRoleEngins($e['TV_CODE']);
        array_push($Role, $Var);
        }
        //die(print_r($Role));
        return json_encode($Role,true);
    }
}
    //Test de verification pour verifier les objets recuperer
    //$test = Engin::getRole();
    //echo $test;
?>