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
if(isset($_GET["date_debut"]) AND !empty($_GET["date_debut"]))
{
    $_GET["date_debut"] = htmlspecialchars($_GET["date_debut"]);
}
if(isset($_GET['date_fin']) AND !empty($_GET['date_fin']))
{
    $_GET["date_fin"] = htmlspecialchars($_GET["date_fin"]);
}


$dateDebut = $_GET["date_debut"];
$dateFin = $_GET["date_fin"];

$reponse = $bdd->query("SELECT titre, resum, date_debut_affiche, date_fin_affiche FROM film WHERE date_fin_affiche >= '" . $dateDebut . "' AND date_fin_affiche <= '" . $dateFin . "'");
// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

while ($donnees = $reponse->fetch())
    
{
?>
<p> <strong> Film <strong> :<?php echo $donnees["titre"]; ?> <br/>
Resum : <?php echo $donnees["resum"]; ?> <br/>
From :<?php echo $donnees['date_debut_affiche']; ?><br/>
To :<?php echo $donnees['date_fin_affiche']; ?>


   
<?php
}
 
$reponse->closeCursor();


?>


   

