<div class="menu">
        <ul id="navigation">
            <li id="utilisateur"><p> Admin : <br> <?php echo $_SESSION['firstname']." ".$_SESSION['lastname']; ?></p></li>
            <li><a href="index.php?co=seebooks&action=borrowedbooks" title="Les livres empruntés">Voir les livres empruntés</a></li>
            <li><a href="livres.html" title="Les livres">Livres</a></li>
            <li><a href="utilisateurs.html" title="Les utilisateurs">Utilisateurs</a></li>
            <li><a href="livre.html" title="Ajout Livre">Ajout Livre</a></li>
            <li><a href="utilisateur.html" title="Ajout Utilisateur">Ajout Utilisateur</a></li>
            <li><a href="index.php?co=deconnexion" title="deconnexion">Se déconnecter</a></li>
        </ul>
    </div>
<div class="centrer">
    <h1><span>Bienvenue sur la ViViothèque</span></h1>
