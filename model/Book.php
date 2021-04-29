<?php
//htmlentities
/**
 * Gère les livres de ma base de données
 */
class Book extends PdoViviotheque {
    
    /**
     * Récupère les livres emprunter par un utilisateur selon l'id en param
     *
     * @param  int $id_user
     * @return string[]
     */
    public function borrowedBooksByUser($id_user) {
        $req = "SELECT b.title, b.author, b.nb_pages, b.nb_availabilities, b.nb_total FROM books b JOIN loans l ON b.num = l.num_book JOIN users u ON u.id = l.id_user WHERE l.id_user = '$id_user' AND ISNULL(l.rendering_date)";
        $res = parent::$myPdo->query($req);
        $tabBorrowedBooks = $res->fetchAll();
        return $tabBorrowedBooks;
    }
    
    /**
     * Récupère la liste des livres
     *
     * @return array[]
     */
    public function getBooks() {
        $req = "SELECT * FROM books";
        $res = parent::$myPdo->query($req);
        $tabBooks = $res->fetchAll();
        return $tabBooks;
    }
    
    /**
     * Ajoute un nouveau livre à la base de donnée sauf id car auto-incrémenter
     *
     * @param  string $title
     * @param  string $author
     * @param  int $nb_pages
     * @param  int $nb_availabilities
     * @param  int $nb_total
     * @return void
     */
    public function addBook($title, $author, $nb_pages, $nb_availabilities, $nb_total) {
        $req = "INSERT INTO books VALUES ('', '$title', '$author', '$nb_pages', '$nb_availabilities', '$nb_total')";
        parent::$myPdo->exec($req);
    }
    
    /**
     * Modification d'un livre dans la base de donnée
     *
     * @param  string $title
     * @param  string $author
     * @param  int $nb_pages
     * @param  int $nb_availabilities
     * @param  int $nb_total
     * @return void
     */
    public function updateBook($title, $author, $nb_pages, $nb_availabilities, $nb_total) {
        $req = "UPDATE books SET title = $title, author = $author, nb_pages = $nb_pages, nb_availabilities = $nb_availabilities, nb_total = $nb_total";
        parent::$myPdo->exec($req);
    }
    
    /**
     * Supprime un livre selon l'id en param
     *
     * @param  int $num
     * @return void
     */
    public function deleteBook($num) {
        $req = "DELETE FROM books WHERE num = $num";
        parent::$myPdo->exec($req);
    }
}