<?php
require_once 'DB.php';
class Engins
{
    public function construct(){}
    static public function getAllEngins()
    {
        $stmt=DB::connect()->prepare('SELECT * FROM  type_vehicule');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
        $stmt=null;
    }
}
?>