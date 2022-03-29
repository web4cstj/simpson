<?php
class Personnage extends \Web4cstj\DB\Table
{
    static public $database = Simpson::class;
	static public $table = "personnages";
	static public $champs = [
		"nom_francais" => 'Nom français',
		"nom_anglais" => 'Nom anglais',
		"url_page" => 'Adresse de la page',
		"url_image" => 'Adresse de l\'image',
		"description" => 'Description',
	];
	/**
	 * Méthode html_personnageIndex
	 * Retourne le HTML d'un li de la liste
	 * Cette méthode est appelée dans la page index.php
	 * @return [string HTML] - Le HTML du li.personnage
	 */
	public function html_personnageIndex()
	{
		$resultat = '';
		$resultat .= '<li class="personnage">';
		$resultat .= '<a href="details.php?id=' . $this->id . '">';
		$resultat .= $this->nom_francais;
		$resultat .= '</a>';
		$resultat .= '</li>';
		return $resultat;
	}


	/**
	 * Méthode html_personnageDetails
	 * Retourne le HTML d'un article
	 * Cette méthode est appelée dans details.php
	 * @return [string HTML] - Le HTML du article.personnage
	 */
	public function html_personnageDetails()
	{
		$resultat = '';
		$resultat .= '<article class="personnage" data-id="' . $this->id . '">';
		$resultat .= '<img';
		$resultat .= ' src="' . $this->url_image . '"';
		$resultat .= ' title="' . $this->nom_francais . '"';
		$resultat .= ' alt="' . $this->nom_francais . '"';
		$resultat .= '/>';
		$resultat .= '<div>';
		$resultat .= '<h3>';
		$resultat .= '<span class="nom_francais">' . $this->nom_francais . '</span>';
		$resultat .= '<span class="nom_anglais">(' . $this->nom_anglais . ')</span>';
		$resultat .= '</h3>';
		$resultat .= '<div class="description">' . $this->description . '</div>';
		$resultat .= '<div class="url_page">';
		$resultat .= '<a href="' . $this->url_page . '" target="_blank">';
		$resultat .= 'Lien vers la page originale ➚';
		$resultat .= '</a>';
		$resultat .= '</div>';
		$resultat .= '</div>';
		$resultat .= '</article>';
		return $resultat;
	}
}
