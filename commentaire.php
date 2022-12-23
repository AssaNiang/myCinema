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
if(isset($_GET["ajout_avis"]) AND !empty($_GET["ajout_avis"]))
{
    $_GET["ajout_avis"] = htmlspecialchars($_GET["ajout_avis"]);
}

$reponse = $bdd->query("SELECT titre, resum, date_debut_affiche, date_fin_affiche FROM film WHERE date_fin_affiche >= '" . $dateDebut . "' AND date_fin_affiche <= '" . $dateFin . "'");