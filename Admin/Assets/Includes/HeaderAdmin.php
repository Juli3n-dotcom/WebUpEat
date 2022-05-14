<?php
require_once __DIR__ . '/../Config/Init.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#f6f6f9">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🚀 WebUpEat | <?= $page_title ?></title>

  <link rel="icon" href="Assets/Images/dashboard.svg">
  <link rel="apple-touch-icon" href="Assets/Images/dashboard.svg">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <!-- Material icon -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

  <!--CSS -->
  <link href="Assets/Style/Style.css" rel="stylesheet" type="text/css">
</head>

<header>
  <button id="menu-btn">
    <span class="material-icons-sharp">menu</span>
  </button>

  <div class="search__wrapper">
    <!--  input de recherche -->
  </div>

  <div class="header-menu">

    <div class="notifcation_center_container">
      <div id="notif" class="bell-wrapper active" data-numbers="10" onclick="menuNotifToggle();">
        <img src="Assets/Images/bell.svg" class="bell-icon" alt="notifications">
      </div>
      <div class="notifications_center">
        <h3>Centre de notifications</h3>
        <ul>

          <li>
            <div class="notif-box">
              <div class="background-blur"></div>
              <div class="notif_header">
                <div class="background-blur"></div>
                <div class="notif_contents">
                  <div class="notif_header-left">
                    <span class="material-icons-sharp success">check_circle</span>
                    Succès
                  </div>
                  <div class="notif_header-right">
                    <small class="text-muted">Il y a 23 min</small>
                  </div>
                </div>
              </div>
              <div class="notif_contents notif_main-content">
                <strong>
                  Nathan D
                </strong>
                <br />
                Yeah, that's sound with me. I'll see you in 10
              </div>
            </div>
          </li>

          <li>
            <div class="notif-box">
              <div class="background-blur"></div>
              <div class="notif_header">
                <div class="background-blur"></div>
                <div class="notif_contents">
                  <div class="notif_header-left">
                    <span class="material-icons-sharp warning">warning</span>
                    Attention
                  </div>
                  <div class="notif_header-right">
                    <small class="text-muted">Il y a 23 min</small>
                  </div>
                </div>
              </div>
              <div class="notif_contents notif_main-content">
                <strong>
                  Nathan D
                </strong>
                <br />
                Yeah, that's sound with me. I'll see you in 10
              </div>
            </div>
          </li>

          <li>
            <div class="notif-box">
              <div class="background-blur"></div>
              <div class="notif_header">
                <div class="background-blur"></div>
                <div class="notif_contents">
                  <div class="notif_header-left">
                    <span class="material-icons-sharp info">info</span>
                    Info
                  </div>
                  <div class="notif_header-right">
                    <small class="text-muted">Il y a 23 min</small>
                  </div>
                </div>
              </div>
              <div class="notif_contents notif_main-content">
                <strong>
                  Nathan D
                </strong>
                <br />
                Yeah, that's sound with me. I'll see you in 10
              </div>
            </div>
          </li>

          <li>
            <div class="notif-box">
              <div class="background-blur"></div>
              <div class="notif_header">
                <div class="background-blur"></div>
                <div class="notif_contents">
                  <div class="notif_header-left">
                    <span class="material-icons-sharp error">dangerous</span>
                    Erreur
                  </div>
                  <div class="notif_header-right">
                    <small class="text-muted">Il y a 23 min</small>
                  </div>
                </div>
              </div>
              <div class="notif_contents notif_main-content">
                <strong>
                  Nathan D
                </strong>
                <br />
                Yeah, that's sound with me. I'll see you in 10
              </div>
            </div>
          </li>

        </ul>
        <a href="#">Afficher tout</a>
      </div>
    </div>


    <!-- Menu USER -->

    <div class="member_menu-action" id="member_menu-action">
      <div class="profile" onclick="menuTeamToggle();">
        <img src='Assets/Uploads/Profil.png' alt='photo_profil_other'>
      </div>
      <div class="member_menu">
        <h3>Roger</h3>
        <ul>
          <li>
            <span class="material-icons-sharp">assignment_ind</span>
            <a href="Profil.php"> Mon Compte</a>
          </li>
          <li>
            <span class="material-icons-sharp">help</span>
            <a href="#" class="help__btn"> Help</a>
          </li>
          <li>
            <input type="checkbox" id="toggle-theme">
            <label for="toggle-theme" class="button-toggle"></label>
            <a>Mode Sombre</a>
          </li>
          <li>
            <span class="material-icons-sharp">logout</span>
            <a href="Assets/Src/Login/Logout.php"> Déconnexion</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

</header>

<section class="sidebar" id="sidebar">

  <div class="sidebar-top">
    <div class="sidebar-mobile">
      <div class="sidebar-logo">
        <img src="../Global/Images/webup_logo.png" alt="Logo webup">
        <h2>WebUP<span> Eat</span></h2>
      </div>
      <div class="close" id="close-btn">
        <span class="material-icons-sharp">close</span>
      </div>
    </div>


    <button id="sidebar-menu-btn">
      <span class="material-icons-sharp">menu</span>
    </button>
  </div>

  <div class="sidebar-menu">
    <ul class="nav-links">

      <li>
        <a href="#">
          <div class="link-title">
            <span class="material-icons-sharp">grid_view</span>
            <h3>Dashboard</h3>
          </div>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="index.php">Dashboard</a></li>
        </ul>
      </li>

      <li>
        <div class="icon-link">
          <a href="#">
            <div class="link-title">
              <span class="material-icons-sharp">shopping_cart</span>
              <h3>Shop</h3>
            </div>
            <span class="material-icons-sharp arrow">expand_more</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Shop</a></li>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">Commandes</a></li>
          <li><a href="#">Réglages</a></li>
        </ul>
      </li>



      <li>
        <div class="icon-link">
          <a href="#">
            <div class="link-title">
              <span class="material-icons-sharp">inventory</span>
              <h3>Produits</h3>
            </div>
            <span class="material-icons-sharp arrow">expand_more</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Produits</a></li>
          <li><a href="#">Tous les produits</a></li>
          <li><a href="#">Ajouter</a></li>
          <li><a href="#">Attributs</a></li>
          <li><a href="#">Visites</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <div class="link-title">
            <span class="material-icons-sharp">insights</span>
            <h3>Analytics</h3>
          </div>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <div class="link-title">
            <span class="material-icons-sharp">person</span>
            <h3>Clients</h3>
          </div>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Clients</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <div class="link-title">
            <span class="material-icons-sharp">manage_accounts</span>
            <h3>Equipe</h3>
          </div>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Equipe</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <div class="link-title">
            <span class="material-icons-sharp">settings</span>
            <h3>Préférences</h3>
          </div>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Préférences</a></li>
        </ul>
      </li>

      <li>
        <div class="icon-link">
          <a href="#">
            <div class="link-title">
              <span class="material-icons-sharp">admin_panel_settings</span>
              <h3>Admin</h3>
            </div>
            <span class="material-icons-sharp arrow">expand_more</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Amin</a></li>
          <li><a href="#">Jounal</a></li>
          <li><a href="#">Options</a></li>
        </ul>
      </li>

    </ul>
  </div>

  <div class="profile_content">
    <div class="profile">
      <div class="profile_details" id="profile_details">
        <img src="Assets/Uploads/Profil.png" alt="Photo de profil">
        <div class="name_job">
          <div class="name">Roger</div>
          <div class="job">Admin</div>
        </div>
      </div>
      <a href="Assets/Src/Login/Logout.php" title="Déconnexion"> <span class="material-icons-sharp" id="log_out">logout</span></a>
    </div>
  </div>

</section>

<body>
  <main id="main" class="main">