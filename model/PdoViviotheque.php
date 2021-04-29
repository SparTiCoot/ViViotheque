<?php

/**
 * Classe d'accès au données
 * Utilise les services de la classe PDO
 * J'ai mis des attributs static pour pouvoir y accéder sans avoir à instancier la classe
 * Les 5 premiers sont pour la connexion
 */
class PdoViviotheque {

    protected static $server = 'mysql:host=localhost';
    protected static $db = 'dbname=viviotheque';
    protected static $charset = 'charset=utf8';
    protected static $user = 'root';
    protected static $password = '';
    protected static $myPdo;
    
    /**
     * Constructeur protéger de ma classe, 
     * qui instancie PDO qui sera utilisée dans toutes les méthodes de la classe
     * 
     * @return void
     */
    public function __construct()
    {
        PdoViviotheque::$myPdo = new PDO(PdoViviotheque::$server.';'.PdoViviotheque::$db.';'.PdoViviotheque::$charset, PdoViviotheque::$user, PdoViviotheque::$password);
    }
    
    /**
     * Pour la déconnexion de la bdd
     *
     * @return void
     */
    public function __destruct()
    {
        PdoViviotheque::$myPdo = null;
    }
    
}