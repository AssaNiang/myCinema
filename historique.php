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
if(isset($_GET['historique_nom']) AND !empty($_GET['historique_nom']))
{
    $_GET["historique_nom"] = htmlspecialchars($_GET["historique_nom"]);
}
else if(isset($_GET['historique_prenom']) AND !empty($_GET['historique_prenom']))
{
    $_GET["historique_prenom"] = htmlspecialchars($_GET["historique_prenom"]);
}
//recuperation de données
$reponse = $bdd->query("SELECT fiche_personne.nom, fiche_personne.prenom, film.titre , historique_membre.date 
FROM fiche_personne INNER JOIN membre ON fiche_personne.id_perso=membre.id_fiche_perso 
INNER JOIN historique_membre ON historique_membre.id_membre=membre.id_membre 
INNER JOIN film ON film.id_film=historique_membre.id_film WHERE fiche_personne.prenom LIKE '%$_GET[historique_prenom]%'AND fiche_personne.nom LIKE '%$_GET[historique_nom]%'");




// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

while ($donnees = $reponse->fetch())

{
    ?>
    <p>
  
     NOM :<?php echo $donnees["nom"]; ?> <br/>
     prenom :<?php echo $donnees["prenom"]; ?> <br/>
     titre :<?php echo $donnees["titre"]; ?> <br/>
     date :<?php echo $donnees["date"]; ?> <br/>
    </p>
    
<?php
}

$reponse->closeCursor();
?>
