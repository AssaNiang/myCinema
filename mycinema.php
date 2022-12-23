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
$reponse = $bdd->query("SELECT nom FROM genre");


// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
?>
<option value=""></option>
<?php
while ($donnees = $reponse->fetch())
    
{
    ?>

<option value="<?php echo $donnees["nom"]; ?>"><?php echo $donnees["nom"]; ?> </option>
    
<?php
}


$reponse->closeCursor();


?>
