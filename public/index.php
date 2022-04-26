<!DOCTYPE html>
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
				<h1>Allo</h1>
			</header>
			<?php
			/* On affiche la liste. Il n'y a rien à faire ici*/
			echo $affichage;
			?>
		</section>
	</div>
</body>
</html>
