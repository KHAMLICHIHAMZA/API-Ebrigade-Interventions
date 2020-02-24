<?php
require_once 'Model/Utilisateur.php';
class Utilisateurs{
    static public function ListUtilisateur(){
        $response = Utilisateur::getAll();
         return json_encode($response);
        //return $response;
    }
    static public function SearchUtilisateur($P_CODE){
            // retourne L utilisateurs en fonction du p_code
            $response = Utilisateur::getByP_CODE($P_CODE);
            //var_dump($response);
            return  json_encode($response);
    }
    static public function getOne(){

   // $employeid=$_POST['EmployeeID'];

    if(isset($_POST['P_ID']))
    {

    $data =array('P_ID'=> $_POST['P_ID']);
    $employe= Utilisateur::getEmploye($data);
    //return $employe;
    $d=json_encode($employe);
    return $d;


    }
    }
}
?>