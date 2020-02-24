<?php
require_once 'DB.php';
class Engins
{
    public function construct(){}
    //Recuperation des engins de la BDD ebrigade
    static public function getAllEngins()
    {
        $stmt=DB::connect()->prepare('SELECT * FROM  type_vehicule');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
        $stmt=null;
    }
    //Recuperation des roles des pompiers de chaque engins depuis BDD ebrigade
    static public function getRoleEngins($i)
    {
        $stmt=DB::connect()->prepare('SELECT * FROM  type_vehicule_role WHERE TV_CODE ="'.$i.'"');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
        $stmt=null;
    }
}
