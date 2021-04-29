<?php
require_once('model/PdoViviotheque.php');
require_once('model/User.php');
require_once('model/Book.php');
require_once('auth.php');
include('view/v_header.php');
session_start();
$pdoUser = new User();
$pdoBook = new Book();
$isConnect = isConnect();
//co pour controller
if(!isset($_REQUEST['co']) || !$isConnect) {
    $_REQUEST['co'] = 'connexion';
}
$co = $_REQUEST['co'];
switch ($co) {
    case 'deconnexion' :
        include("controller/c_deconnexion.php");
        break;
    case 'connexion' : 
        include("controller/c_connexion.php");
        break;
    case 'seeBooks' :
        include("controller/c_borrowedBooks/php");
        break;
}
include('view/v_footer.php');
?>