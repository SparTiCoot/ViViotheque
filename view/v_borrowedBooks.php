<div class="search_place">
    <input type="search" placeholder="Entrez un mot-clef" name="search_word">
    <button>Rechercher</button>
</div>
<?php
if (empty($books)) {
    echo "<font color='#FFFFFF'> Vous n'avez emprunter aucun livre.</p>";
} else {
?>
    <div id='tableau'>
        <table>
            <thead>
                <tr>
                    <th>Titre du livre</th>
                    <th>Auteur de livre</th>
                    <th>Nb de pages</th>
                    <th>Disponibilité</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($books as $book) { ?>
                    <tr>
                        <td>
                            <?= $book['title']; ?>
                        </td>
                        <td>
                            <?= $book['author']; ?>
                        </td>
                        <td>
                            <?= $book['nb_pages']; ?>
                        </td>
                        <td>
                            <?= $book['nb_availabilities']; ?>
                        </td>
                        <td>
                            <?= $book['nb_total']; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php } ?>