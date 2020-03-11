<?php
require_once 'Model/Utilisateur.php';
class Utilisateurs
{
    static public function ListUtilisateur()
    {
        $response = Utilisateur::getAll();
        return json_encode($response);
        //return $response;
    }
    static public function SearchUtilisateur($P_CODE)
    {
            $response = Utilisateur::getByP_CODE($P_CODE);
            return  json_encode($response);
    }

    static public function getOne()

    {
    if(isset($_GET['P_ID']))
    {
    $data =array('P_ID'=> $_GET['P_ID']);
    $employe= Utilisateur::getEmploye($data);
    $d=json_encode($employe,true);
    return $d; 
   }

    else

    {

    die(print_r("erreru de remplissage de formulaire"));

    }

}


    public function auth()
    {

         if (isset($_POST['username'])) 
        {
            $password=$_POST['password'];

            $username=$_POST['username'];

            $result=Utilisateur::login($username);

        
            $d=json_encode($result,true);


                return $d;

        /*if ($result['P_CODE'] === $username && password_verify($password, $result['password'])) 
        
        {
            $_SESSION['logged'] = true;
            $_SESSION['username']=$result['P_CODE'];
            $_SESSION['P_ID']=$result['P_ID'];
            $d=$_SESSION;

            //Redirect::to('home');
            
            header('location:http://localhost/Interventions-Management/home');

            return $d;
        }
*/
        }
    else{
        var_dump ($_POST);
        
        die("errrreur  login");

        
  }

    }
static public function update()
{
         $id=$_POST['post']['P_ID'];
         $nom=$_POST['post']['nom'];
         $prenom=$_POST['post']['prenom'];
         $email=$_POST['post']['email'];
         $sexe=$_POST['post']['sexe_'];
         $grade=$_POST['post']['grade'];
         $profession=$_POST['post']['profession'];
         $status=$_POST['post']['status_'];
         $data= array("nom"=>$nom,
                      "prenom"=>$prenom,
                      "email"=>$email,
                      "sexe"=>$sexe,
                      "grade"=>$grade,
                      "profession"=>$profession,
                      "status"=>$status,
                      "id"=>$id
);

$result =Utilisateur::up($data);

if($result == 'ok')
{
    
    var_dump($result);

header('Location: localhost/home');


}    
   
}

    }



?>