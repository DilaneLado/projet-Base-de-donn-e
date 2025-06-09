<?php 
    session_start();
    require_once 'service.php';

    if (isset($_SESSION['error'])) {
        var_dump($_SESSION['error']); // Pour le debug uniquement
        $package->getErrorMessage($_SESSION['error']);
        unset($_SESSION['error']);
    }
    $view = null;
    if(isset($_GET['view']) == true){
        $view = $_GET['view'];
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotheque</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/adherent.css"/>
    <link rel="stylesheet" type="text/css" href="css/livre.css"/>
    <style>
        
    </style>
</head>
<body>

<header>
    <h1 style="margin: 0;">Bibliotheque</h1>
    <div class="user-info">
        <div class="user-avatar"></div>
        <span>Bienvenue</span>
    </div>
</header>

<nav class="horizontal-nav">
    <ul class="nav-menu">
        <li class="nav-item <?php echo ($view === null || $view === 'info') ? 'active' : ''; ?>">
            <a href="#" class="dropdown-toggle">Adhérent</a>
            <ul class="nav-submenu">
                <li><a href="index.php?view=adherant">Liste Adherent</a></li>
                <li><a  href="index.php?view=suspen">Suspendu</a></li>
            </ul>
        </li>
        <li class="nav-item <?php echo ($view === 'centre') ? 'active' : ''; ?>">
            <a  class="dropdown-toggle">Emprunt</a>
            <ul class="nav-submenu">
                <li><a href="index.php?view=emprunt">Liste des Emprunts</a></li>
            </ul>
        </li>
        <li class="nav-item <?php echo ($view === 'besoin') ? 'active' : ''; ?>">
            <a href="#" class="dropdown-toggle">Livre</a>
            <ul class="nav-submenu">
                <li><a  href="index.php?view=livre">Voir Livre</a></li>
            </ul>
        </li>
        <li class="nav-item <?php echo ($view === 'rend') ? 'active' : ''; ?>">
            <a href="#" class="dropdown-toggle">Retour</a>
            <ul class="nav-submenu">
                <li><a href="index.php?view=rendre">Voir Les Retour</a></li>
                <li><a href="index.php?view=nonrendu">Voir Les Non Retour</a></li>
        </li>
    </ul>
</nav>

<div class="content-area">
   <?php 
				if ($view == null || $view == 'adherant') {
					include('view/adherant/index.php');
				}
				else if ($view == 'update_adherant' ) {
					include('view/adherant/update.php');
				}
				else if ($view == 'create' ) {
					include('view/adherant/create.php');
				}
				else if ($view == 'suspend') {
                    include('view/adherant/suspend_adherant.php');
                }
				else if ($view == 'suspen') {
                    include('view/adherant/suspend_adherant.php');
                }
				else if ($view == 'livre' ) {
					include('view/livre/index.php');
				}
                else if ($view == 'create_livre' ) {
					include('view/livre/create.php');
				}
                else if ($view == 'update_livre') {
                    include('view/livre/update.php');
                }
				 else if ($view == 'emprunt') {
                    include('view/emprunt/index.php');
                }
				else if ($view == 'createPlusieur') {
                    include('view/emprunt/create.php');
                }
				else if ($view == 'panier') {
                    include('view/livre/panier.php');
                }
				else if ($view == 'ajout') {
                    include('view/emprunt/create.php');
                }
                else if ($view == 'rendre') {
                    include('view/retourner/create.php');
                }
                else if ($view == 'nonrendu') {
                    include('view/retourner/index.php');
                }
				// else if ($view == 'update_user' ) {
				// 	include('view/user/update.php');
				// }
				// else if ($view == 'salle' ) {
				// 	include('view/salle/index.php');
				// }
				// else if ($view == 'create_salle' ) {
				// 	include('view/salle/create.php');
				// }
				// else if ($view == 'update_salle' ) {
				// 	include('view/salle/update.php');
				// }
				// else if ($view == 'categorie' ) {
				// 	include('view/categorie/index.php');
				// }
				// else if ($view == 'create_categorie' ) {
				// 	include('view/categorie/create.php');
				// }
				// else if ($view == 'update_categorie' ) {
				// 	include('view/categorie/update.php');
				// }
				// else if ($view == 'commande' ) {
				// 	include('view/commande/index.php');
				// }
				// else if ($view == 'create_commande' ) {
				// 	include('view/commande/create.php');
				// }
				// else if ($view == 'update_commande' ) {
				// 	include('view/commande/update.php');
				// }
			 ?>
			 </div>
</div>

<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/livre.js"></script>

</body>
</html>