<?php
/*
----------------------------------------------------------------
VOTRE NOM :
----------------------------------------------------------------

CONSIGNES GÉNÉRALES
===================
1) Modifier le fichier simpsons.inc.php en suivant les instructions dans le fichier
2) Modifier le fichier Personnage.class.php en suivant les instructions dans le fichier
3) Compléter la page index.php
4) Compléter la page details.php
5) Supprimer les fichiers .html avant la remise
6) Renommer le dossier selon votre code de nomenclature NOMP1234567. Ne pas le zipper
7) Remettre dans le bon dossier dans REMISE.

*/


/*
Inclure le fichier "simpsons.inc.php"
*/


/*
Inclure la classe Personnage
*/


/*
Composer l'affichage du ul.personnages avec des concaténations successives
en utilisant la bonne méthode de la classe Personnage
*/
$affichage = '';

?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Tous les personnages — Mes Simpson</title>
	<link rel="stylesheet" href="simpson.css"/>
</head>
<body>
	<div class="interface">
        <?php/* Présentement, la page n'a pas d'entete ni de pied de page */?>
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
