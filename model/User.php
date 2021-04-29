<?php
/**
 * Gère les utilisateurs de ma base de donnée
 */
class User extends PdoViviotheque {

    /**
     * Récupère les utilisateurs de la BBD ordonnée par nom
     *
     * @return array[]
     */
    public function users() {
        $req = "SELECT * FROM users ORDER BY lastname";
        $res = PdoViviotheque::$myPdo->query($req);
        $tabUsers = $res->fetchAll();
        return $tabUsers;
    }

    public function getUser($login, $password) {
        $req = "SELECT u.id as id, u.firstname as firstname, u.lastname as lastname, u.role_user as statut FROM users u WHERE login = '$login' AND password = MD5('$password') AND role_user != 'En attente'";
        $res = PdoViviotheque::$myPdo->query($req);
        $user = $res->fetch();
        return $user;
    }

    /**
     * Ajoute un utilisateur à la base de donnée
     *
     * @param  string $email
     * @param  string $login
     * @param  string $password
     * @param  string $firstname
     * @param  string $lastname
     * @param  date $date_of_birth
     * @return void
     */
    public function addUser($email, $login, $password, $firstname, $lastname, $date_of_birth) {
        $req = "INSERT INTO users ('id', 'email', 'login', 'password', 'firstname', 'lastname', 'date_of_birth', 'role_user') VALUES ('','$email','$login', '$password', '$firstname', '$lastname', '$date_of_birth', '')";
        parent::$myPdo->exec($req);
    }
    
    /**
     * Modifie un utilisateur dans la base de donnée sauf l'id qui est auto-incrémenter et le rôle qui par défaut est "En attente"
     *
     * @param  string $email
     * @param  string $login
     * @param  string $password
     * @param  string $firstname
     * @param  string $lastname
     * @param  date $date_of_birth
     * @return void
     */
    public function updateUser($email, $login, $password, $firstname, $lastname, $date_of_birth) {
        $req = "UPDATE users SET 'email' = $email, 'login' = $login, 'password' = $password, 'firstname' = $firstname, 'lastname' = $lastname, 'date_of_birth'= $date_of_birth";
        parent::$myPdo->exec($req);
    }
        
    /**
     * Supprime un utilisateur selon l'id en param
     *
     * @param  int $id_user
     * @return void
     */
    public function deleteUser($id_user) {
        $req = "DELETE FROM users WHERE id = $id_user";
        parent::$myPdo->exec($req);
    }
}