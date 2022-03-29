<?php
/*
Inclure l'autoload
*/
include_once "../vendor/autoload.php";

$simpsons = Personnage::all();

/*
Composer l'affichage du ul.personnages avec des concaténations successives
en utilisant la bonne méthode de la classe Personnage
*/
$affichage = '';
$affichage .= '<ul class="personnages">';
foreach($simpsons as $id => $personnage) {
	$affichage .= $personnage->html_personnageIndex();
}
$affichage .= '</ul>';

?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Tous les personnages — Mes Simpson</title>
	<link rel="stylesheet" href="css/simpson.css"/>
</head>
<body>
	<div class="interface">
        <?php /* Présentement, la page n'a pas d'entete ni de pied de page */ ?>
		<?php include "../app/headerfooter.php" ?>
		<section class="body">
			<header>
				<h1>Tous les personnages</h1>
			</header>
			<?php
			/* On affiche la liste. Il n'y a rien à faire ici*/
			echo $affichage;
			?>
		</section>
	</div>
</body>
</html>
