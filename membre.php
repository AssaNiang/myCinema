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
if(isset($_GET['search_nom']) AND !empty($_GET['search_nom']))
{
    $_GET["search_nom"] = htmlspecialchars($_GET["search_nom"]);
}
else if(isset($_GET['search_prenom']) AND !empty($_GET['search_prenom']))
{
    $_GET["search_prenom"] = htmlspecialchars($_GET["search_prenom"]);
}

//recuperation de données
$reponse = $bdd->query("SELECT fiche_personne.nom, fiche_personne.prenom FROM fiche_personne INNER JOIN membre ON fiche_personne.id_perso= membre.id_fiche_perso WHERE nom LIKE'%$_GET[search_nom]%'  AND prenom LIKE '%$_GET[search_prenom]%'");


// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

while ($donnees = $reponse->fetch())
    
{
    ?>

<p> <strong> NOM <strong> :<?php echo $donnees["nom"]; ?> <br/>
PRENOM : <?php echo $donnees["prenom"]; ?> 
   
<?php
}
 
$reponse->closeCursor();


?>
