<?php
//A faire de si l'utilisateur rentre pas tous les champs
?>

<div id="container">
    <form action="index.php?co=connexion&action=validateConnexion" method="post">
        <h1>Connexion</h1>

        <label>Nom d'utilisateur</label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" value="" required>

        <label>Mot de passe</label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" value="" required>

        <label>Confirmation du mot de passe</label>
        <input type="password" placeholder="Entrer à nouveau votre mot de passe" name="password" value="" required>

        <input type="submit" id="submit" value="LOGIN">
    </form>
</div>
