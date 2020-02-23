<?php
require_once 'C:/wamp64/www/api/Model/TypeInterventions.php';
class TypeIntervention{
    static public function getAll(){
        $response = TypeInterventions::getAllType();
         return json_encode($response,true);
    }
}
//$tests = TypeIntervention::getAll();
//echo $tests;
//foreach($tests as $test){
//echo $test['TI_CODE'];}
?>