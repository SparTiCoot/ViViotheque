<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'connexionRequest';
}
$action = $_REQUEST['action'];
switch ($action) {
    case 'connexionRequest':
        include('view/v_connexion.php');
        break;
    
    case 'validateConnexion':
        $login = $_POST['login'];
        $password = $_POST['password'];
        $user = $pdoUser->getUser($login, $password);
        if (!is_array($user)) {
            echo "<li>login ou mot de passe incorrect</li>";
            include("view/v_connexion.php");
        } else if ($user['statut'] == 'admin'){
            $id = $user['id'];
            $firstname = $user['firstname'];
            $lastname = $user['lastname'];
            $statut = $user['statut'];
            connected($id, $firstname, $lastname, $statut);
            include('view/v_summaryAdmin.php');
        } else {
            if ($user['statut'] == 'client') {
                include('view/v_summaryClient.php');
            }   
        }
        break;
    default:
        include('view/v_connexion.php');
        break;
}