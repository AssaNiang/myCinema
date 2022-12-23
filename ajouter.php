<?php
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
$reponse = $bdd->query("SELECT fiche_personne.nom, fiche_personne.prenom FROM fiche_personne INNER JOIN membre ON fiche_personne.id_perso= membre.id_fiche_perso WHERE nom LIKE'%$_GET[search_nom]%'AND prenom LIKE '%$_GET[search_prenom]%'");








if(isset($_GET["ajout_entree"]) AND !empty($_GET["ajout_entree"]))
{
    $_GET["ajout_entree"] = htmlspecialchars($_GET["ajout_entree"]);
}

$bdd->query('INSERT INTO historique_membre(id_membre, id_film, date) VALUES(\'247\', \'1848\',\'2003-10-31 00:00:00\')');
