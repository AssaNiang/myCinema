<?php

// Connexion à la base de données

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', 'root');

}

catch(Exception $e)

{

        die("Erreur : .$e->getMessage()");

}

//recuperation de données
$reponse = $bdd->query("SELECT film.titre, genre.nom, distrib.nom 
FROM film LEFT JOIN genre ON film.id_genre=genre.id_genre 
LEFT JOIN distrib ON distrib.id_distrib=film.id_distrib
WHERE( genre.nom LIKE '%$_GET[genre_film]%' AND distrib.nom LIKE '%$_GET[distrib_film]%')
AND film.titre LIKE '%$_GET[search]%'");



// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
//var_dump($reponse);
while ($donnees = $reponse->fetch())


{
    ?>
    <p>
   <!-- <strong>GENRE</strong> : <?php echo $donnees['nom']; ?><br />-->
     Film :<?php echo $donnees["titre"]; ?> <br/>
    </p>
    
<?php
}

$reponse->closeCursor();
?>
