<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
    
    <?php

    $baseTitlle = "Splists - Gestionnaire de tâches";

      switch ($_SESSION['page']) {
        case 'index':
            echo "Bienvenue sur $baseTitlle";
          break;
        case 'signup':
            echo "Inscription | $baseTitlle";
          break;
        case 'login':
            echo "Connexion | $baseTitlle";
          break;
        case 'board':
            echo "Mes listes | $baseTitlle";
          break;
        default:
            echo "Splists - $baseTitlle";
          break;
      }
    ?>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark top-navbar">
  <a class="navbar-brand" href="/splists/index.php">Splists</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if ($_SESSION['page'] == 'login') {echo "active"; } ?>">
        <a class="nav-link" href="/splists/view/login.php">Se connecter</a>
        <li class="nav-item <?php if ($_SESSION['page'] == 'signup') {echo "active"; } ?>">
        <a class="nav-link" href="/splists/view/signup.php">Creer un compte</a>
        <li class="nav-item <?php if ($_SESSION['page'] == 'board') {echo "active"; } ?>">
        <a class="nav-link" href="/splists/view/board.php">Tableau</a>
      </li>
    </ul>
  </div>
</nav>