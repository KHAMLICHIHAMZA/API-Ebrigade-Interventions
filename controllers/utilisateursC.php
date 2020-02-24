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
    if(isset($_GET['P_ID']))
    {
    $data =array('P_ID'=> $_GET['P_ID']);
    $employe= Utilisateur::getEmploye($data);
    $d=json_encode($employe,true);
    return $d; 
   }
    else
    {

    die(print_r("erreru"));

    }


    }

static public function update(){
        
if(isset($_POST['submit']))
{
$data= array
(
'P_git' => $_POST['EmployeeID'],
'Title' => $_POST['Title'],
'NationalIDNumber' => $_POST['NationalIDNumber'],
'BirthDate' => $_POST['BirthDate'],
'Gender' => $_POST['Gender']

);


$result =Employe::update2($data);



if($result === 'ok')
{

    echo "<script type='text/javascript'>window.top.location='http://localhost/management-employee/';</script>"; exit;


}else {
    echo $result;
}

}

    }
}
?>