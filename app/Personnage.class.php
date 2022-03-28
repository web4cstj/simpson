<?php
/**
 * IDENTIFICATION :
 *
 * Consignes
 * =========
 * Créer et utiliser les méthodes suivantes.
 * Placer les méthodes en-dessous de leur description.
 * Faire attention à la mise en page du code
 * Séparer les balises en plusieurs lignes (concaténations) autant que possible.
 */
class Personnage {

	/**
	 * Méthode statique html_personnageIndex
	 * Retourne le HTML d'un li de la liste
	 * Cette méthode est appelée dans la page index.php
	 * @param  array   $personnage - Le personnage à afficher dans la liste
	 * @return [string HTML] - Le HTML du li.personnage
	 */
	static public function html_personnageIndex($personnage) {
		$resultat = '';
		$resultat .= '<li class="personnage">';
		$resultat .= '<a href="details.php?id='.$personnage['id'].'">';
		$resultat .= $personnage['nom_francais'];
		$resultat .= '</a>';
		$resultat .= '</li>';
		return $resultat;
	}


	/**
	 * Méthode statique html_personnageDetails
	 * Retourne le HTML d'un article
	 * Cette méthode est appelée dans details.php
	 * @param  array   $personnage - Le personnage à afficher dans la page
	 * @return [string HTML] - Le HTML du article.personnage
	 */
	static public function html_personnageDetails($personnage) {
		$resultat = '';
		$resultat .= '<article class="personnage" data-id="'.$personnage['id'].'">';
		$resultat .= '<img';
		$resultat .= ' src="'.$personnage['url_image'].'"';
		$resultat .= ' title="'.$personnage['nom_francais'].'"';
		$resultat .= ' alt="'.$personnage['nom_francais'].'"';
		$resultat .= '/>';
		$resultat .= '<div>';
		$resultat .= '<h3>';
		$resultat .= '<span class="nom_francais">'.$personnage['nom_francais'].'</span>';
		$resultat .= '<span class="nom_anglais">('.$personnage['nom_anglais'].')</span>';
		$resultat .= '</h3>';
		$resultat .= '<div class="description">'.$personnage['description'].'</div>';
		$resultat .= '<div class="url_page">';
		$resultat .= '<a href="'.$personnage['url_page'].'" target="_blank">';
		$resultat .= 'Lien vers la page originale &#10138;';
		$resultat .= '</a>';
		$resultat .= '</div>';
		$resultat .= '</div>';
		$resultat .= '</article>';
		return $resultat;
	}

}
