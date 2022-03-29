<?php
/*
Inclure l'autoload
*/
include "../vendor/autoload.php";

/*
Récupérer la donnée "id" provenant de l'adresse.
Rediriger vers la page index.php si la donnée n'est pas présente.
*/
if (!isset($_GET['id'])) {
	header("location:index.php");
	exit;
}
$id = $_GET['id'];

/*
Récupérer le personnage (array) correspondant au id.
Rediriger vers la page index.php si le personnage n'existe pas.
*/
$personnage = Personnage::find($id);
if (!$personnage) {
	header("location:index.php");
	exit;
}

/*
Composer l'affichage du article.personnage avec des concaténations successives
en utilisant la bonne méthode de la classe Personnage
*/
$affichage = '';
$affichage .= $personnage->html_personnageDetails();

?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?php /* Afficher le nom en français ICI */ echo $personnage->nom_francais; ?> — Les personnages — Mes Simpson</title>
	<link rel="stylesheet" href="css/simpson.css"/>
</head>
<body>
	<div class="interface">
        <?php /* Présentement, la page n'a pas d'entete ni de pied de page */?>
		<?php include "../app/headerfooter.php" ?>
		<section class="body">
			<header>
				<h1><a href="index.php">&#8678; Les personnages</a></h1>
			</header>
			<?php
			/* On affiche les détails. Il n'y a rien à faire ici*/
			echo $affichage;
			?>
		</section>
	</div>
</body>
</html>
