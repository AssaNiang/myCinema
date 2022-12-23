 <!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MY CINE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="wrapper-header">
             <h1>MY CINEMA</h1>
            <nav>
                <div class="menu">
                    <div class="categorie">
                        <div class="wrapper">
                            <h3>CINEMA</h3>
                                 <ul>
                                     <li><a href="#">Paris</a></li>
                                     <li><a href="#">Lille</a></li>
                                     <li><a href="#">Nantes</a></li>
                                 </ul>
                        
                                 <div>
                                    <h3>FILMS</h3>
                                 </div>
                            <div> 
                                <h3>NEWS</h3>
                            </div>
                         </div>
                  </div>
                </div>
            </nav>
        </div>
    </header>
    <div>
      <img src="images.jpeg" alt="poster" />
    </div>
    <section class="block">
                <h2>RECHERCHE PAR GENRE OU DISTRIBUTEUR</h2>
                <form action ="genre.php" method="get">
                    <label for="search">Recherche</label>
                     <input name="search" placeholder= "RECHERCHER" id="search">
                    <label for="genre_film">GENRE FILM</label> 
                    <select name="genre_film" id="genre_film" >
                      <?php include('mycinema.php'); ?>
                    </select>
                       <label for="distrib_film">DISTRIB FILM</label> 
                     <select name="distrib_film" id="distrib_film" >
                      <?php include('distrib.php'); ?>
                     </select>
                  <input type="submit" value="Envoyer" />
                </form>
    </section>
    <div class="block">
        <form action="membre.php" method="get">
                <h3>Recherche un membre</h3>
            <label for="nom_recherche">RECHERCHE PAR NOM</label>
            <input name="search_nom" id="nom_recherche" >
            <label for="recherche">RECHERCHE PAR PRENOM</label>
            <input name="search_prenom" id="recherche" >
             <input type="submit" value= "Rechercher" />
        </form>
    </div>
    <div class="block">
        <form action ="historique.php" method="get"> 
                <h3>Historique d'un membre</h3>
            <label for="search_historique">nom</label>
            <input name="historique_nom" id="search_historique"/>
             <label for="search_historique1">prenom</label>
            <input name="historique_prenom" id="search_historique1"/>
             <input type="submit" value="Envoyer"/>
        </form>
    </div>
    <div class="block">
        <form action="projection.php" method="get">
             <h3>Les films par date de projection</h3>
            <label for="date_entree">Début de projection</label>
             <input  type="date" name="date_debut" id="date_entree"/>
             <label for="date_fin">Fin de projection</label>
             <input  type="date" name="date_fin" id="date_fin">
             <input type="submit" value="Rechercher"/>
        </form>
    </div>
    <div class="block">
        <form action="commentaire.php" method="get">
             <h3> Donner son avis </h3>
           <label for="commentaire">Ajouter un commentaire</label>
           <input name="ajout_avis" id="commentaire"/>
           <input type="submit" value="Ajouter"/>
        </form>
    </div>
 <div class="block">
       <form action="ajouter.php" method="get">
            <h3>Ajouter une entrée</h3>
         <label for="ajout_nom1">Ajouter un nom</label>
         <input name="ajout_nom" id="ajout_nom1"/>
         <label for="ajout_film1">Ajouter un film</label>
         <input name="ajout_film" id="ajout_film1"/>
         <label for="ajout_date1">Ajouter une date</label>
         <input type="date" name="ajout_date" id="ajout_date1"/>
         <label for="ajout">Ajouter une entrée</label>
         <input name="ajout_entree" id="ajout"/>
         <input type="submit" value="Ajouter"/>
        </form>
    </div>
    <div class="block">
        <form action="abonnement.php" method="get">
              <h3>Abonnement</h3>
             <label for="ajout_abonnement1">Ajouter un abonnement</label>
             <input name="ajout_abonnement" id="ajout_abonnement1"/>
             <label for="supprimer">Supprimer un abonnement</label>
             <input name="supprimer_abonnement" id="supprimer"/>
             <label for="modifier">Modifier</label>
             <input name="modifier_abonnement" id="modifier"/>
             <input type="submit" value="Envoyer"/>
        </form>
    </div>
</body>
</html>