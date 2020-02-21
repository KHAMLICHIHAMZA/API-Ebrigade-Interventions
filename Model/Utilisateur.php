<?php
require_once 'DB.php';

class Utilisateur
{
    public function construct(){}
    static public function getAll()
    {
        $stmt=DB::connect()->prepare('SELECT * FROM pompier');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }
    static public function getByP_CODE($P_CODE)
    {
        $stmt=DB::connect()->prepare('SELECT * FROM pompier WHERE P_CODE LIKE :P_CODE');
        $stmt->bindParam(':P_CODE', $P_CODE);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function update()
    {}

    static public function delete(){}

    static public function getEmploye($data)
    {

        $id =$data['P_ID'];
        try {
            $query='SELECT * FROM pompier WHERE P_ID=:P_ID';
            $stmt= DB::connect()->prepare($query);
            $stmt->execute(array(":pompierid" => $id));
            $employe = $stmt->fetchAll();
            return $employe;
        } catch (PDOException $ex) {
            echo'erer' . $ex->getMessage();
        }

    }

    
}

