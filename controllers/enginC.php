<?php
require_once 'C:/wamp64/www/api/Model/Engins.php';
class Engin{
    static public function getAll(){
        $response = Engins::getAllEngins();
         return json_encode($response,true);
    }
}
?>