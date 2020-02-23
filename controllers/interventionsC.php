<?php
require_once 'C://wamp64/www/api/Model/Interventions.php';

//require_once '../Model/Type_Interventions.php';
class TypeIntervention{
    static public function getAll(){
        $response = TypeInterventions::getAllType();
        //  echo $response;
         return $response;
        //return $response;
    }
}
//http://localhost/api/utilisateurs.php?c=interventions&m=getAll

//$test = TypeIntervention::getAll();
//echo (json_encode($test));
?>