<?php
function listeDActeur($db)
{
    $sql = "SELECT * FROM acteurs;";
    $instru = $db->prepare($sql);
    $instru->execute();
    $instru->SetFetchMode(PDO::FETCH_ASSOC);
  // on récupére un tab associatif avec comme clé le nom des colonnes
    return $instru->fetchAll();
}
?>