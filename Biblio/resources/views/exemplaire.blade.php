<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Bibliothèque</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="welcome">Bibliothèque</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="welcome">Accueil</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="client">Client <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="liste_client">Listes clients</a></li>
          <li><a href="nouveau_client">Nouveau client</a></li>
          <li><a href="supprimer_client">Supprimer un client</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="livre">Livre <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="liste_livre">Listes livres</a></li>
          <li><a href="nouveau_livre">Nouveau livre</a></li>
          <li><a href="supprimer_livre">Supprimer un livre</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="exemplaire">Exemplaire <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="liste_exemplaire">Listes exemplaires</a></li>
          <li><a href="nouveau_exemplaire">Nouveau exemplaire</a></li>
          <li><a href="supprimer_exemplaire">Supprimer un exemplaire</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

  
<div class="container">
  <h3>Bonjour passez une bonne journée</h3>
  <p>This example adds a dropdown menu for the "Page 1" button in the navigation bar.</p>


<h4> A faire si l'application web ne fonctionne pas </h4>
<p>Redémarrer l'ordinateur </p>
<p>Appeler le service informatique</p>
</div>
</body>
</html>