<?php

$nombre = readline ("Entrez un nombre entre 1 et 3 : ");

while ($nombre < 1 || $nombre > 3)
{
    $nombre = readline ("Entrez un nombre entre 1 et 3 : ");
}

echo ("bravo");

?>