<?php
/*  Kevin Kraaijveld PHP FilmController
============================================================================

1. Algemeen
2. Create
3. Delete
4. Edit

============================================================================ */

/* 1. Algemeen
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit linkt de controller met de models
require(ROOT . "model/GenreModel.php");
require(ROOT . "model/FilmModel.php");
require(ROOT . "model/TypeModel.php");
require(ROOT . "model/SerieModel.php");

// Dit toont alle genres in de view/moviedatabase/index.php
function index(){
	render("moviedatabase/index", // Dit toont de index.php in de view
		array(
				'films' => joinAllFilms(),  // Voert de 'joinAllfilms' functie uit in de FilmModel.php
		)
	);
}

// Dit toont alle films van een rating in de view/moviedatabase/rating/see.php
function seeRating($id){
	render("moviedatabase/rating/see", // Dit toont de see.php in de view /view/moviedatabase/rating/
		array(
			'films' => joinAllFilms(),           // Voert de 'joinAllFilms' functie uit in de FilmModel.php
			'genres' => getAllGenres(),        	 // Voert de 'getAllGenres' functie uit in de GenresModel.php
			'genre' =>  getGenreById($id),       // Voert de 'getGenreById' functie uit in de GenreModel.php
			'thisGenre' => getGenreByName($id),	 // Voert de 'getGenreByName' functie uit in de GenreModel.php
			'rating' =>  getRatingById($id),   	 // Voert de 'getRatingById' functie uit in de FilmModel.php
		)
	);
}

// Dit toont alle films met dezelfde origin in de view/moviedatabase/origin/see.php
function seeOrigin($film_origin){
	render("moviedatabase/origin/see", // Dit toont de see.php in de de view /view/moviedatabase/rating/
		array(
			'films' => joinAllFilms(),										// Voert de 'joinAllFilms' functie uit in de FilmModel.php
			'genres' => getAllGenres(), 									// Voert de 'getAllGenres' functie uit in de GenresModel.php
			'genre' =>  getGenreById($id), 								// Voert de 'getGenreById' functie uit in de GenreModel.php
			'thisGenre' => getGenreByName($id), 					// Voert de 'getGenreByName' functie uit in de GenreModel.php
			'thisOrigin' => getOriginByName($film_origin) // Voert de 'getOriginByName' functie uit in de FilmModel.php
		)
	);
}

/* 2. Create
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
// Dit word uitgevoerd als je in de moviedatabase/films/index.php op 'voeg een film toe' klikt
function createFilm(){
// Als je in het formulier op 'versturen' klikt stuurt hij de array met data naar de FilmModel
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$data=array(
			'film_name' => $_POST['film_name'],
			'type_id' => $_POST['type_id'],
			'genre_id' => $_POST['genre_id'],
			'film_duration' => $_POST['film_duration'],
			'film_episodes' => $_POST['film_episodes'],
			'film_rating' => $_POST['film_rating'],
			'film_origin' => $_POST['film_origin']
		);
			newFilm($data); // Dit voert de 'newFilm' functie in de FilmModel uit
				echo "<script>alert('Film toegevoegd'); window.location = '/Moviedatabase_MVC/';</script>";
	}
	render("moviedatabase/films/create", // Dit toont de moviedatabase/films/create.php
		array(
			'types' => getAllTypes() , // Voert de 'getAllTypes' functie uit in de TypesModel.php
			'genres' => getAllGenres() // Voert de 'getAllGenres' functie uit in de GenresModel.php
		)
	);
}

/* 3. Delete
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

	// Dit word uitgevoerd als je in de view/moviedatabase/films/index.php op delete klikt
	function deleteFilm($id){
			$film = getFilmById($id); // Voert de 'getFilmById' functie uit in de /FilmModel.php
		render("moviedatabase/films/delete", ['film' => $film]); // Dit toont de moviedatabase/films/delete.php
	}
	// Dit word uitgevoerd als je in de view/moviedatabase/films/delete.php op bevestigen klikt
	function deleteAFilm($id){
		deleteThisFilm($id); // Dit voert de 'deleteThisFilm' functie in de FilmModel uit.
	echo "<script>alert('Film verwijderd'); window.location = '/Moviedatabase_MVC/';</script>";
	}


/* 4. Edit
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word uitgevoerd als je in de view/moviedatabase/films/index.php op edit klikt
function editFilm($id){
		$film = getFilmById($id);
	render("moviedatabase/films/edit",
		array(
			'type' => getAllTypes() , // Voert de 'getAllTypes' functie uit in de TypesModel.php
			'genres' => getAllGenres(), // Voert de 'getAllGenres' functie uit in de GenresModel.php
			'film' => $film
		)
	); // Dit toont de moviedatabase/films/edit.php
}

// Dit word uitgevoerd als je in de moviedatabase/films/edit.php op opslaan klikt
function saveChange(){
		updateFilm($_POST); // Voert de 'updateFilm' functie uit in de FilmModel.php
	echo "<script>alert('Film is aangepast'); window.location = '". URL ."';</script>";
}

/*Made by Kevin Kraaijveld*/
