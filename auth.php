<?php
function isConnect() {
    return isset($_SESSION['id']);
}

function connected($id, $firstname, $lastname, $statut) {
    $_SESSION['id'] = $id;
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['status'] = $statut;
}

function disconnection() {
    session_destroy();
    header('Location: view/v_connexion.php');
    exit;
}