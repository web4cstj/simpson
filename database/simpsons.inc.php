<?php
/*
Ce fichier crée la variable $simpsons (array) contentant les informations des personnages
Chaque élément est un autre array composé des informations suivantes :
"id", "nom_francais", "nom_anglais", "url_page", "url_image" et "description"
La clé de chaque élément est une répétition de son "id"
Pour l'exercice, vous devez créer au moins 5 éléments (pas besoin de tous les faire)
Prendre les informations dans le fichier liste_complete.html
*/
$simpsons = [
	102 => [
		"id" => 102,
		"nom_francais" => 'AEROSMITH',
		"nom_anglais" => 'AEROSMITH',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---AEROSMITH.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/aerosmith.jpg',
		"description" => 'Le groupe Aerosmith est apparu dans l&apos;épisode Un cocktail d&apos;enfer'
	],
	103 => [
		"id" => 103,
		"nom_francais" => 'Akira',
		"nom_anglais" => 'Akira',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Akira.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/akira.jpg',
		"description" => ''
	],
	104 => [
		"id" => 104,
		"nom_francais" => 'Jeff Albertson',
		"nom_anglais" => 'Jeff Albertson',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Jeff-(le-vendeur-de-BD)--Albertson.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Jeff_Albertson_the_Comic_Book_Guy.gif',
		"description" => 'Le vendeur de BD.'
	],
	105 => [
		"id" => 105,
		"nom_francais" => 'Thomas Anderson',
		"nom_anglais" => 'Thomas A. Anderson alias Neo ',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Thomas--Anderson.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Neo-The-Matrix.gif',
		"description" => 'Thomas A. Anderson alias Neo (Keanu Reeves) de Matrix en Simpson.',
	],
	106 => [
		"id" => 106,
		"nom_francais" => 'Mary Bailey',
		"nom_anglais" => 'Mary Bailey',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Mary--Bailey.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Mary_Bailey.jpg',
		"description" => 'Gouverneur démocrate de l&apos;état de Springfield.'
	],
	107 => [
		"id" => 107,
		"nom_francais" => 'Red Barclay',
		"nom_anglais" => 'Red Barclay',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Red--Barclay.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Red_Barclay.jpg',
		"description" => 'Chauffeur de camion et gros mangeur de viande.'
	],
	108 => [
		"id" => 108,
		"nom_francais" => 'Barney le dinosaure',
		"nom_anglais" => 'Barney the Dinosaur',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Barney-le-dinosaure.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Barney-le-dinosaure.gif',
		"description" => 'Personnage d&apos;émission pour enfant.'
	],
	109 => [
		"id" => 109,
		"nom_francais" => 'Dana Barrett',
		"nom_anglais" => 'Dana Barrett',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Dana--Barrett.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Dana_Barrett.gif',
		"description" => 'Dana Barrett (Sigourney Weaver) de Ghostbusters en Simpson'
	],
	110 => [
		"id" => 110,
		"nom_francais" => 'Batman',
		"nom_anglais" => 'Batman',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Batman.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/batman.gif',
		"description" => 'Batman en Simpson.'
	],
	111 => [
		"id" => 111,
		"nom_francais" => 'Jasper Beardley',
		"nom_anglais" => 'Jasper Beardley',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Jasper--Beardley.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Jasper_Beardley.gif',
		"description" => 'Ami d&apos;Abraham Simpson, il vit à la maison de retraite dans la même chambre qu&apos;Abe.'
	],
	112 => [
		"id" => 112,
		"nom_francais" => 'Tony Blair',
		"nom_anglais" => 'Tony Blair',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Tony--Blair.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Tony_Blair.jpg',
		"description" => 'Ex premier ministre anglais.'
	],
	113 => [
		"id" => 113,
		"nom_francais" => 'Blinky',
		"nom_anglais" => 'Blinky',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Blinky.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/blinky.gif',
		"description" => 'Poisson génétiquement modifié par les polluants nucléaires de l&apos;eau.'
	],
	114 => [
		"id" => 114,
		"nom_francais" => 'Ricardo Bomba',
		"nom_anglais" => 'Ricardo Bomba',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Ricardo--Bomba.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/ricardo_bomba.jpg',
		"description" => 'Ricardo Bomba dans un épisode des Simpson. Ce personnage a été créer par Peggy Black lors du concours de création de personnages.(c&apos;était la gagnante).'
	],
	115 => [
		"id" => 115,
		"nom_francais" => 'James Bond',
		"nom_anglais" => 'James Bond alias 007',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-James--Bond.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/James_Bond_007.gif',
		"description" => 'James Bond 007 en Simpson.'
	],
	116 => [
		"id" => 116,
		"nom_francais" => 'Wendell Borton',
		"nom_anglais" => 'Wendell Borton',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Wendell--Borton.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Wendell_Borton.gif',
		"description" => 'Elève nerveux, vomit fréquemment, peut-être comparé à "Vomito" du dessin animé "Titeuf".'
	],
	117 => [
		"id" => 117,
		"nom_francais" => 'Boule de Neige I',
		"nom_anglais" => 'Snowball I',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Boule-de-Neige-I.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Snowball_II.gif',
		"description" => 'Premier chat de la famille Simpson. Il est mort.'
	],
	118 => [
		"id" => 118,
		"nom_francais" => 'Boule de Neige II',
		"nom_anglais" => 'Snowball II',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Boule-de-Neige-II.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Snowball_II.gif',
		"description" => 'Remplaçant de Boule de Neige I. Il fut écrasé par le docteur Hibert dans l&apos;épisode FABF04. Son remplaçant porte le même nom et lui ressemble comme 2 gouttes d&apos;eau.'
	],
	119 => [
		"id" => 119,
		"nom_francais" => 'Boule de Neige III',
		"nom_anglais" => 'Snowball III',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Boule-de-Neige-III.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Snowball_II.gif',
		"description" => 'Remplaçant de Boule de Neige II, il mourut noyé dans l&apos;aquarium des Simpson peu après son apparition.'
	],
	120 => [
		"id" => 120,
		"nom_francais" => 'Patty Bouvier',
		"nom_anglais" => 'Patty Bouvier',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Patty--Bouvier.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Patty_Bouvier.gif',
		"description" => 'Soeur de Marge Simpson et Selma Bouvier.'
	],
	121 => [
		"id" => 121,
		"nom_francais" => 'Selma Bouvier',
		"nom_anglais" => 'Selma Bouvier',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Selma--Bouvier.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Selma_Bouvier.gif',
		"description" => 'Soeur de Marge Simpson et de Patty Bouvier.'
	],
	122 => [
		"id" => 122,
		"nom_francais" => 'Ling Bouvier',
		"nom_anglais" => 'Ling Bouvier',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Ling--Bouvier.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Ling_Bouvier.gif',
		"description" => 'Fille adoptive de Selma Bouvier.'
	],
	123 => [
		"id" => 123,
		"nom_francais" => 'Gladys Bouvier',
		"nom_anglais" => 'Gladys Bouvier',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Gladys--Bouvier.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Gladys_Bouvier.gif',
		"description" => 'Tante de Selma, Marge et Patty. Elle est décedée.'
	],
	124 => [
		"id" => 124,
		"nom_francais" => 'Jacqueline Bouvier',
		"nom_anglais" => 'Jacqueline Ingrid Bouvier',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Jacqueline--Bouvier.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Jackie_bouvier.gif',
		"description" => 'Mère de Marge, Patty et Selma.'
	],
	125 => [
		"id" => 125,
		"nom_francais" => 'Brentano',
		"nom_anglais" => 'Dr Brentano',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Brentano.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Dr.Brentano.gif',
		"description" => 'Psychiatre pour enfant, il suit Bart Simpson.'
	],
	126 => [
		"id" => 126,
		"nom_francais" => 'Kent Brockman',
		"nom_anglais" => 'Kent Brockman',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Kent--Brockman.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Kent_Brockman.jpg',
		"description" => 'Présentateur du journal de Channel 6 (KBBL-TV).'
	],
	127 => [
		"id" => 127,
		"nom_francais" => 'Emmett Brown',
		"nom_anglais" => 'Dr. Emmett L. Brown alias Doc',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Emmett--Brown.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Doc_Brown_Back_To_The_Future.gif',
		"description" => 'Dr. Emmett L. Brown  alias Doc (Christopher Lloyd) de Retour vers le futur en Simpson.'
	],
	128 => [
		"id" => 128,
		"nom_francais" => 'Carla Bruni',
		"nom_anglais" => 'Carla Gilberta Bruni Sarkozy',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Carla--Bruni.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/carla_bruni.jpg',
		"description" => 'La première dame de France Carla Bruni-Sarkozy dans un épisode des Simpson'
	],
	129 => [
		"id" => 129,
		"nom_francais" => 'Charles Montgomery Burns',
		"nom_anglais" => 'Charles Montgomery Burns',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Charles-Montgomery--Burns.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/charles_burns.gif',
		"description" => 'Homme de 89 ans. Patron de la centrale nucléaire de Springfield, patron d&apos;un casino dans 2 épisodes. Il a été dans l&apos;armée avec Abraham Simpson durant la deuxième guerre mondiale. C&apos;est un homme machiavélique qui a pour habitude de dire "excellent" très régulièrement. '
	],
	130 => [
		"id" => 130,
		"nom_francais" => 'Larry Burns',
		"nom_anglais" => 'Larry Burns',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Larry--Burns.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Larry_Burns.gif',
		"description" => 'Unique fils de Charles Montgomery Burns.'
	],
	131 => [
		"id" => 131,
		"nom_francais" => 'Georges Bush',
		"nom_anglais" => 'Georges Bush',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Georges--Bush.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/georges_bush.jpg',
		"description" => 'L&apos;ancien président des Etats Unis Georges Bush Senior a fait une apparition dans l&apos;épisode Deux mauvais voisins'
	],
	132 => [
		"id" => 132,
		"nom_francais" => 'Barbara Bush',
		"nom_anglais" => 'Barbara Bush',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Barbara--Bush.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/barbara_bush.jpg',
		"description" => 'La femme de Georges Bush Senior a fait une apparition dans l&apos;épisode Deux Mauvais Voisins.'
	],
	133 => [
		"id" => 133,
		"nom_francais" => 'Nicolas Sarkozy',
		"nom_anglais" => 'Nicolas Sarkozy de Nagy-Bocsa',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Nicolas--Sarkozy.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/nicolas_sarkozy.jpg',
		"description" => 'Le président de la République Française Nicolas Sarkozy dans un épisode des Simpson.'
	],
	134 => [
		"id" => 134,
		"nom_francais" => 'Sherri',
		"nom_anglais" => 'Sherri',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Sherri.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Sherri.gif',
		"description" => 'Soeur jumelle de Terri, leur père travaille à la centrale nucléaire.'
	],
	135 => [
		"id" => 135,
		"nom_francais" => 'Shredder',
		"nom_anglais" => 'Oroku Saki alias Shredder',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Shredder.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Shredder.gif',
		"description" => 'Le méchant de Tortues Ninja en Simpson.'
	],
	136 => [
		"id" => 136,
		"nom_francais" => 'Mona Simpson',
		"nom_anglais" => 'Mona Simpson',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Mona--Simpson.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/mona-simpson.gif',
		"description" => 'C&apos;est la mère d&apos;Homer Simpson, elle a vécu la plupart de sa vie caché car elle fut poursuivi par Monty Burns pour avoir détruit son laboratoire pendant les sixties. Elle est décédée dans l&apos;épisode de la saison 19 Mona Leaves-a.'
	],
	137 => [
		"id" => 137,
		"nom_francais" => 'Bart Simpson (Bartolomew) Jay',
		"nom_anglais" => 'Bartolomew Jay Simpson',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Bart-(Bartolomew-)-Jay--Simpson.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Bart_Simpson.gif',
		"description" => 'L&apos;ainé de la famille, il a 10-11 ans, adore faire des farces et s&apos;amuser. Son meilleur ami est Milhouse.'
	],
	138 => [
		"id" => 138,
		"nom_francais" => 'Homer Jay Simpson',
		"nom_anglais" => 'Homer J. Simpson',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Homer-Jay--Simpson.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Homer_Simpson.gif',
		"description" => 'Le père de famille il a environ 39 ans adore ne rien faire et regarder la télé et boire des "duff" et manger. Il travaille à la centrale nucléaire de Springfield (si on peut appeler ça travailler) Il a également été croupier de black jack.'
	],
	139 => [
		"id" => 139,
		"nom_francais" => 'Hugo Simpson',
		"nom_anglais" => 'Hugo Simpson',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Hugo--Simpson.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Hugo_Simpson.jpg',
		"description" => 'Frère siamois de Bart Simpson dans un épisode spécial Halloween.'
	],
	140 => [
		"id" => 140,
		"nom_francais" => 'Abbie Simpson',
		"nom_anglais" => 'Amber Simpson',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Abbie--Simpson.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Abbie_Simpson.jpg',
		"description" => 'Demi-soeur présumé d&apos;Homer Simpson, sa mère a été une rapide aventure d&apos;Abraham Simpson en Angleterre.'
	],
	141 => [
		"id" => 141,
		"nom_francais" => 'Abe Simpson',
		"nom_anglais" => 'Abraham Simpson',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Abe--Simpson.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/abe_simpson.gif',
		"description" => 'Le Grand-père Simpson, c&apos;est le père d&apos;Homer. Il loge à la maison de retraite,ancien soldat, il est négligé par le reste de sa famille.'
	],
	142 => [
		"id" => 142,
		"nom_francais" => 'Maggie Simpson',
		"nom_anglais" => 'Maggie Simpson',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Maggie--Simpson.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Maggie_Simpson.gif',
		"description" => 'La petite dernière de la famille, elle étonne parfois par ses capacités dans les épisodes. C&apos;est elle qui est censé avoir tiré sur M.Burns.'
	],
	143 => [
		"id" => 143,
		"nom_francais" => 'Lisa Simpson',
		"nom_anglais" => 'Lisa Simpson',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Lisa--Simpson.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Lisa_Simpson.gif',
		"description" => 'La cadette de la famille, elle a 8-9ans, c&apos;est une surdouées mais qui n&apos;est pas comprises par ses parents.'
	],
	144 => [
		"id" => 144,
		"nom_francais" => 'Marge Simpson',
		"nom_anglais" => 'Marge Simpson',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Marge--Simpson.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Marge_Simpson.gif',
		"description" => 'C&apos;est la femme d&apos;Homer et la mère des 3 enfants Simpson, elle est digne d&apos;une bonne mère au foyer. Son nom de jeune fille est Bouvier. Dans l&apos;épisode S21e12, on apprend qu&apos;elle est gauchère.'
	],
	145 => [
		"id" => 145,
		"nom_francais" => 'Agnes Skinner',
		"nom_anglais" => 'Agnes Skinner',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Agnes--Skinner.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Agnes_Skinner.gif',
		"description" => 'Mère naturelle du vraie Seymour Skinner, elle devient mere par adoption du Principal Skinner.'
	],
	146 => [
		"id" => 146,
		"nom_francais" => 'Seymour Skinner',
		"nom_anglais" => 'Principal Seymour Skinner',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Seymour--Skinner.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Seymour_Skinner.gif',
		"description" => 'Principal de l&apos;école élémentaire de Springfield. Fils adoptif de Agnès Skinner.'
	],
	147 => [
		"id" => 147,
		"nom_francais" => 'Waylon Smithers',
		"nom_anglais" => 'Waylon Smithers, Jr.',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Waylon--Smithers.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Waylon_Smithers.gif',
		"description" => 'Assistant de M.Burns dont il est amoureux. Il est le président du club de fan de Malibu Stacy, il a d&apos;ailleurs créé une comédie musicale sur le thème de Malibu Stacy.'
	],
	148 => [
		"id" => 148,
		"nom_francais" => 'Egon Spengler',
		"nom_anglais" => 'Egon Spengler',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Egon--Spengler.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Egon-Spengler.gif',
		"description" => 'Egon-Spengler (Harold Ramis) dans Ghostbusters en Simpson.'
	],
	149 => [
		"id" => 149,
		"nom_francais" => 'Spider Cochon',
		"nom_anglais" => 'Spider Pig',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Spider-Cochon.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/spiderpig.gif',
		"description" => 'Le celebre Spider Cochon alias Harry Crotteur, il fit son apparition la première fois dans l&apos;épisode La reine de l&apos;orthographe (en même temps que le célèbre Ribwich)'
	],
	150 => [
		"id" => 150,
		"nom_francais" => 'Spiderman',
		"nom_anglais" => 'Spiderman',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Spiderman.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/spiderman.gif',
		"description" => 'Spiderman en Simpson.'
	],
	151 => [
		"id" => 151,
		"nom_francais" => 'Spock',
		"nom_anglais" => 'Spock',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Spock.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Spock_Star_Trek.gif',
		"description" => 'Le Commandant Spock (Leonard Nimoy) de Star Trek en Simpson.'
	],
	152 => [
		"id" => 152,
		"nom_francais" => 'Ray Stantz',
		"nom_anglais" => 'Ray Stantz',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Ray--Stantz.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Ray-Stantz.gif',
		"description" => 'Ray Stantz (Dan Aykroyd) dans Ghostbusters en Simpson'
	],
	153 => [
		"id" => 153,
		"nom_francais" => 'Dolphin Starbeam',
		"nom_anglais" => 'Dolphin Starbeam',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Dolphin--Starbeam.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Dolphin_Starbeam.gif',
		"description" => 'Autre terreur de la cour de recrée, amis de Nelson, Kearney et Jimbo.'
	],
	154 => [
		"id" => 154,
		"nom_francais" => 'Strangles',
		"nom_anglais" => 'Strangles',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Strangles.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Strangles.jpg',
		"description" => 'Serpent adopté par Bart Simpson dans l&apos;épisode de la saison 18 "Stop Or My Dog Will Shoot". Il l&apos;a ensuite abandonné.'
	],
	155 => [
		"id" => 155,
		"nom_francais" => 'Superman',
		"nom_anglais" => 'Clark Kent alias Superman',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Superman.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Superman.gif',
		"description" => 'Superman en Simpson'
	],
	156 => [
		"id" => 156,
		"nom_francais" => 'Moe Szyslak',
		"nom_anglais" => 'Morris "Moe" Lester Szyslak',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Moe--Szyslak.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/moe.gif',
		"description" => 'Patron de la taverne de Moe. Il essaye très souvent de se suicider parce qu&apos;il en a marre d&apos;être tout seul mais rate son coup à chaque fois.'
	],
	157 => [
		"id" => 157,
		"nom_francais" => 'Allison Taylor',
		"nom_anglais" => 'Allison Taylor',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Allison--Taylor.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Allison_Taylor.gif',
		"description" => 'Elle fut la petite amie de Bart Simpson.'
	],
	158 => [
		"id" => 158,
		"nom_francais" => 'Terri',
		"nom_anglais" => 'Terri',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Terri.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Terri.gif',
		"description" => 'Soeur jumelle de Sherri, leur père travaille à la centrale nucléaire.'
	],
	159 => [
		"id" => 159,
		"nom_francais" => 'Robert Terwilliger alias Tahiti Bob',
		"nom_anglais" => 'Robert Underdunk Terwilliger alias Sidewhow Bob',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Robert--Terwilliger-alias-Tahiti-Bob.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/tahiti_bob.gif',
		"description" => 'Ancien assistant de Krusty le clown, il a effectué un vol à main armée déguisé en Krusty pour le faire emprisonner mais cela a échoué à cause de Bart Simpson. Depuis, il cherche à tuer Bart Simpson sans réussite à cause de son égo surdimensionné.'
	],
	160 => [
		"id" => 160,
		"nom_francais" => 'The Smothers Brothers',
		"nom_anglais" => 'The Smothers Brothers',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---The-Smothers-Brothers.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/The_Smothers_Brothers.jpg',
		"description" => 'The Smothers Brothers : Tom et Dick Smothers dans un épisode des Simpson.'
	],
	161 => [
		"id" => 161,
		"nom_francais" => 'Tintin',
		"nom_anglais" => 'Tintin',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson---Tintin.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/tintin.jpg',
		"description" => 'Tintin dans un épisode des Simpson.'
	],
	162 => [
		"id" => 162,
		"nom_francais" => 'Monsieur Tiny',
		"nom_anglais" => 'Mister Tiny',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Monsieur--Tiny.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/mr_tiny.jpg',
		"description" => 'Le premier singe de Krusty le clown'
	],
	163 => [
		"id" => 163,
		"nom_francais" => 'Andy Hamilton',
		"nom_anglais" => 'Andy Hamilton',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Andy--Hamilton.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/andy_hamilton.jpg',
		"description" => 'Plus grand farceur de l&apos;école élémentaire mais aussi un gros loser. Il n&apos;est présent que dans l&apos;épisode s21e06'
	],
	164 => [
		"id" => 164,
		"nom_francais" => 'Rover Hendrix',
		"nom_anglais" => 'Rover Hendrix',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Rover--Hendrix.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/rover_hendrix.jpg',
		"description" => 'Chien de Jimmy Hendrix.'
	],
	165 => [
		"id" => 165,
		"nom_francais" => 'Bernice Hibbert',
		"nom_anglais" => 'Bernice Hibbert',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Bernice--Hibbert.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Bernice_Hibbert.gif',
		"description" => 'Femme du docteur Hibbert.'
	],
	166 => [
		"id" => 166,
		"nom_francais" => 'Julius Hibbert',
		"nom_anglais" => 'Dr Julius Hibbert',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Julius--Hibbert.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Julius_Hibbert.gif',
		"description" => 'Medecin de famille des Simpson.'
	],
	167 => [
		"id" => 167,
		"nom_francais" => 'Paris Hilton',
		"nom_anglais" => 'Paris Hilton',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Paris--Hilton.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Paris_Hilton.gif',
		"description" => 'La célebrité Paris Hilton a fait son apparition dans Les Simpson.'
	],
	168 => [
		"id" => 168,
		"nom_francais" => 'Juliet Hobbes',
		"nom_anglais" => 'Juliet Hobbes',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Juliet--Hobbes.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/juliet_hobbes.jpg',
		"description" => 'Apparu dans le 9ème épisode de la saison 20, elle est la meilleure amie éphémère de Lisa.'
	],
	169 => [
		"id" => 169,
		"nom_francais" => 'Pedro Homme abeille',
		"nom_anglais" => 'Bumblebee Man',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Pedro--Homme-abeille.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Bumblebee_Man.gif',
		"description" => 'Comique, on peut le voir sur la chaine de télé Channel Ocho'
	],
	170 => [
		"id" => 170,
		"nom_francais" => 'Elizabeth Hoover',
		"nom_anglais" => 'Elizabeth Hoover',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Elizabeth--Hoover.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Elizabeth_Hoover.gif',
		"description" => 'Maitresse de Lisa Simpson à l&apos;école primaire de Springfield.'
	],
	171 => [
		"id" => 171,
		"nom_francais" => 'Gregory House',
		"nom_anglais" => 'Dr Gregory House',
		"url_page" => 'http://www.thesimpsonsshow.fr/personnages-des-simpson-Gregory--House.html',
		"url_image" => 'http://www.thesimpsonsshow.fr/personnages/Dr-House.gif',
		"description" => 'Le Docteur House (Hugh Laurie) en Simpson.'
	],
];
