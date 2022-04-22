<?php
/*  Kevin Kraaijveld PHP TypesController
============================================================================

1. Algemeen

============================================================================ */

/* 1. Algemeen
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit linkt de controller met de models
require(ROOT . "model/TypeModel.php");
require(ROOT . "model/GenreModel.php");
require(ROOT . "model/FilmModel.php");

// Dit toont alle types in de view/moviedatabase/types/see.php
function seeType($id){
	render("moviedatabase/types/see", // Dit toont de see.php in de view / moviedatabase / types
		array(
			'genres' => getAllGenres(), // Voert de 'getAllGenres' functie uit in de GenresModel.php
			'films' => joinAllFilms(), // Voert de 'joinAllFilms' functie uit in de FilmsModel.php
			'types' =>  getTypeById($id), // Voert de 'getTypeById' functie uit in de TypesModel.php
			'thisType' => getTypeByName($id) // Voert de 'getTypeByName' functie uit in de TypesModel.php
		)
	);
}

/*Made by Kevin Kraaijveld*/
