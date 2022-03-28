<?php
// IDENTIFICATION :
include_once "../database/simpsons.inc.php";

/**
 * On doit utiliser la classe Personnage
 */
include_once "../app/Personnage.class.php";

/**
 * On donne une valeur à $affichage
 */
$affichage = '';
foreach($simpsons as $id => $personnage) {
	$affichage .= Personnage::html_personnageDetails($personnage);
}
?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Toutes les informations de tous les personnages — Mes Simpson</title>
	<link rel="stylesheet" href="css/simpson.css"/>
</head>
<body>
	<div class="interface">
        <!--/* Présentement, la page n'a pas d'entete ni de pied de page */-->
		<?php include "../app/headerfooter.php" ?>
		<section class="body">
			<header>
				<h1>Toutes les informations de tous les personnages</h1>
			</header>
			<?php
			/* On affiche la liste. Il n'y a rien à faire ici*/
			echo $affichage;
			?>
		</section>
	</div>
</body>
</html>
