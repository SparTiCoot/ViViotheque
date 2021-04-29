<?php
include("view/v_summaryAdmin.php");
$action = $_REQUEST['action'];
$id_user = $_SESSION['id'];
switch ($action) {
    case 'borrowedbooks':
        $id_user = $_SESSION['id'];
        $books = $pdoBook->borrowedBooksByUser($id_user);
        include('view/v_borrowedBooks.php');
        break;
    
    default:
        # code...
        break;
}