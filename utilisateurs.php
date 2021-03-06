<?php

/*
require_once  'controllers/UtilisateursControllers.php';

if(isset($_GET['P_CODE']))
{
    // retourne L utilisateurs en fonction du p_code
    $response = UtilisateurController::SearchUtilisateur($_GET['P_CODE']);
}
else
{
    //retourne tous les utilisateurs
    $response = UtilisateurController::ListUtilisateur();
}

echo $response;
*/

error_reporting(E_STRICT | E_ALL);
date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fr_FR.utf8', 'fra');


// =====================  Initialisation
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('CONTROLLERS', ROOT . DS . 'controllers');
define('VIEWS', ROOT . DS . 'views');
define('MODELS', ROOT . DS . 'models');
define('VENDORS', ROOT . DS . 'vendors');
define('CLASSES', ROOT . DS . 'classes');

// =====================  Détermination du controleur à utiliser: Est-ce que j'ai un paramètre 'c' dans mon URL?
if (isset($_GET['c'])) {
    //Il y a un paramètre de précisé: c'est le nom du controleur demandé.
    $controller = strtolower(trim($_GET['c']));
} else {
    //Pas de paramètre => le contrôleur par défaut est le contrôleur HOME
    $controller = 'home';
}

// =====================  Détermination de la méthode à appeler: Est-ce que j'ai un paramètre 'm' dans mon URL?
if (isset($_GET['m'])) {
    //Il y a un paramètre de précisé: c'est le nom de la méthode demandée.
    $method = strtolower(trim($_GET['m']));
}
 else 
{
    //Pas de paramètre => la méthode par défaut est la méthode INDEX
    $method = 'index';
}


// =====================  Détermination de la id à utiliser: Est-ce que j'ai un paramètre 'id' dans mon URL?
if (isset($_GET['P_CODE'])) {
    //Il y a un paramètre de précisé: c'est l'identifiant
    $P_CODE = strtolower(trim($_GET['P_CODE']));
} else {
//Pas de paramètre => la méthode par défaut est la méthode INDEX
    $P_CODE = null;
}

// =====================  Appel
//On construit le nom du fichier qui contient le contrôleur appelé (ou le contrôleur par défaut)
$controllerfilename = $controller .'C.php';
//On inclut les fichiers nécessaires
include CONTROLLERS . DS . $controllerfilename;
//On construit le nom de la classe que l'on va instancier
$controllerclassname = ucfirst($controller) ;
//On instancie cette classe
$c = new $controllerclassname();
//On appelle la méthode demandée (ou la méthode par défaut)
//id,title,firstname,middlename,lastname,nationalidnumber,birthday,hireday,maritialstatus,gender,heurevacance,heuremaladie,email,telephone,poste,idmanager
    if (!is_null($P_CODE))
        echo $c->$method($P_CODE);
    else
        echo $c->$method();

