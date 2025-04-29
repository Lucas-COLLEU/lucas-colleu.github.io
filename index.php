<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site style L'Équipe</title>
  <link rel="stylesheet" href="assets/fonts/font.css">
  <link rel="stylesheet" href="assets/fonts/style.css">
  <link rel="stylesheet" href="css/homepage.css">
</head>
<body>

  <header class="topbar">
    <div class="logo"><strong>L'ucas COLLEU</strong></div>

  </header>

  <!-- Barre verticale à gauche -->
  <aside class="sidebar">
    <nav class="sidenav">
      <div class="dropdown">
        <a href="#">Football</a>
        <div class="dropdown-content">
          <a href="#">Ligue 1</a>
          <a href="#">Ligue 2</a>
          <a href="#">Premier League</a>
          <a href="#">La Liga</a>
        </div>
      </div>
      <div class="dropdown">
        <a href="#">Football 22</a>
        <div class="dropdown-content">
          <a href="#">Ligue 1</a>
          <a href="#">Ligue 2</a>
          <a href="#">Premier League</a>
          <a href="#">La Liga</a>
        </div>
      </div>
      <div class="dropdown">
        <a href="#">Football 33</a>
        <div class="dropdown-content">
          <a href="#">Ligue 1</a>
          <a href="#">Ligue 2</a>
          <a href="#">Premier League</a>
          <a href="#">La Liga</a>
        </div>
      </div>
      <div class="dropdown">
        <a href="#">Football 44</a>
        <div class="dropdown-content">
          <a href="#">Ligue 1</a>
          <a href="#">Ligue 2</a>
          <a href="#">Premier League</a>
          <a href="#">La Liga</a>
        </div>
      </div>
      <div class="dropdown">
        <a href="#">Football 44</a>
        <div class="dropdown-content">
          <a href="#">Ligue 1</a>
          <a href="#">Ligue 2</a>
          <a href="#">Premier League</a>
          <a href="#">La Liga</a>
        </div>
      </div>

    </nav>
  </aside>

  <!-- Contenu principal -->
  <main class="content">

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['nom'])) {
        $nom = htmlspecialchars($_POST['nom']);
        echo "<p>Bonjour, <strong>$nom</strong> ! Ravi de vous voir ici.</p>";
    } else {
    ?>
        <form method="post" action="">
            <label for="nom">Entrez votre nom :</label>
            <input type="text" id="nom" name="nom" required>
            <button type="submit">Envoyer</button>
        </form>
    <?php
    }
    ?>
    <h1>Bienvenue sur le site</h1>
    <p>Voici le contenu principal. Scrollez pour tester la barre fixe en haut et la sidebar fixe à gauche.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et turpis et leo egestas suscipit.</p>
    <p>Encore du contenu... encore du contenu... encore du contenu... encore du contenu... encore du contenu...</p>
    <p>Encore du contenu... encore du contenu... encore du contenu... encore du contenu... encore du contenu...</p>
    <p>Encore du contenu... encore du contenu...
        <h1>Bienvenue sur le site</h1>
        <p>Voici le contenu principal. Scrollez pour tester la barre fixe en haut et la sidebar fixe à gauche.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et turpis et leo egestas suscipit.</p>
        <p>Encore du contenu... encore du contenu... encore du contenu... encore du contenu... encore du contenu...</p>
        <p>Encore du contenu... encore du contenu... encore du contenu... encore du contenu... encore du contenu...</p>
        <p>Encore du contenu... encore du contenu...
            <h1>Bienvenue sur le site</h1>
    <p>Voici le contenu principal. Scrollez pour tester la barre fixe en haut et la sidebar fixe à gauche.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et turpis et leo egestas suscipit.</p>
    <p>Encore du contenu... encore du contenu... encore du contenu... encore du contenu... encore du contenu...</p>
    <p>Encore du contenu... encore du contenu... encore du contenu... encore du contenu... encore du contenu...</p>
    <p>Encore du contenu... encore du contenu...
        <h1>Bienvenue sur le site</h1>
    <p>Voici le contenu principal. Scrollez pour tester la barre fixe en haut et la sidebar fixe à gauche.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et turpis et leo egestas suscipit.</p>
    <p>Encore du contenu... encore du contenu... encore du contenu... encore du contenu... encore du contenu...</p>
    <p>Encore du contenu... encore du contenu... encore du contenu... encore du contenu... encore du contenu...</p>
    <p>Encore du contenu... encore du contenu...
        <h1>Bienvenue sur le site</h1>
    <p>Voici le contenu principal. Scrollez pour tester la barre fixe en haut et la sidebar fixe à gauche.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et turpis et leo egestas suscipit.</p>
    <p>Encore du contenu... encore du contenu... encore du contenu... encore du contenu... encore du contenu...</p>
    <p>Encore du contenu... encore du contenu... encore du contenu... encore du contenu... encore du contenu...</p>
    <p>Encore du contenu... encore du contenu...
        <h1>Bienvenue sur le site</h1>
    <p>Voici le contenu principal. Scrollez pour tester la barre fixe en haut et la sidebar fixe à gauche.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et turpis et leo egestas suscipit.</p>
    <p>Encore du contenu... encore du contenu... encore du contenu... encore du contenu... encore du contenu...</p>
    <p>Encore du contenu... encore du contenu... encore du contenu... encore du contenu... encore du contenu...</p>
    <p>Encore du contenu... encore du contenu...
        <h1>Bienvenue sur le site</h1>
    <p>Voici le contenu principal. Scrollez pour tester la barre fixe en haut et la sidebar fixe à gauche.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et turpis et leo egestas suscipit.</p>
    <p>Encore du contenu... encore du contenu... encore du contenu... encore du contenu... encore du contenu...</p>
    <p>Encore du contenu... encore du contenu... encore du contenu... encore du contenu... encore du contenu...</p>
    <p>Encore du contenu... encore du contenu...
