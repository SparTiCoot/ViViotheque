<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=viviotheque', 'root', '');
}
catch (Exception $e)
{
    echo $e->getMessage(), '\n';
}
$books = $bdd->query('select * from books');
print_r($books);
foreach($books as $book)
{
    echo $book['title'];
}

echo 'toto';