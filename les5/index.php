<?php
// ------------------------------------------------------------------------
// Maak het onderstaande script werkend:
// Vul de code aan en zorg dat de include-bestanden in de juiste map staan
// ------------------------------------------------------------------------

// Settings
include 'includes/config.php';

// head section <head>
include 'views/head.php';

// hier komt de header sectie etc.
include 'views/header.php';

// hier komt de header sectie etc.
include 'views/head.php';

// hier komt de navigatie
include 'views/menu.php';

$action = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($action) {
  case 'home';
    include 'views/home.php';
    break;
  case 'contact';
    include 'views/contact.php';
    break;
  case 'articles';
    include 'views/articles.php';
    break;
  case 'about';
    include 'views/about.php';
    break;
  }

// hier komt de footer
include 'views/footer.php';
?>
