<?php
session_start();
/*  Kevin Kraaijveld PHP GenreController
============================================================================

1. Algemeen
2. Create
3. Delete
4. Edit

============================================================================ */

/* 1. Algemeen
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit linkt de controller met de models
require(ROOT . "model/TypeModel.php");
require(ROOT . "model/GenreModel.php");
require(ROOT . "model/FilmModel.php");

// Dit toont alle genres in de view/moviedatabase/genres.php
function genres(){
	render("moviedatabase/genres", // Dit toont de genres.php in de view
		array(
			'genres' => getAllGenres(), // Voert de 'getAllGenres' functie uit in de GenresModel.php
			'films' => joinAllFilms() // Voert de 'joinAllFilms' functie uit in de FilmModel.php
		)
	);
}

// Dit toont een genre in de view/moviedatabase/genres/see.php wanneer je in de op een genre klikt
function seeGenre($id){
	render("moviedatabase/genres/see",     // Dit toont de moviedatabase/genres/see.php in de view
		array(
			'films' => joinAllFilms(),         // Voert de 'joinAllFilms' functie uit in de FilmModel.php
			'types' =>  getTypeById($id),      // Voert de 'getTypeById' functie uit in de TypesModel.php
			'genres' => getAllGenres(),        // Voert de 'getAllGenres' functie uit in de GenresModel.php
			'genre' =>  getGenreById($id),     // Voert de 'getGenreById' functie uit in de GenreModel.php
			'thisGenre' => getGenreByName($id) // Voert de 'getGenreByName' functie uit in de GenreModel.php
		)
	);
}

/* 2. Create
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word uitgevoerd als je in de moviedatabase/genres/create.php op versturen klikt
function createGenre(){
	// Als je in het formulier op 'versturen' klikt stuurt hij de array met data naar de GenreModel
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$data=array(
			'genre_description' => $_POST['genre_description']
		);
			newGenre($data); // Dit voert de 'newGenre' functie in de GenreModel uit.
				echo "<script>alert('Genre toegevoegd'); window.location = '/Moviedatabase_MVC/genre/genres/';</script>";
	}
	render("moviedatabase/genres/create"); // Dit toont de moviedatabase/genres/create.php
}

/* 3. Delete
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word uitgevoerd als je in de moviedatabase/genre/genres.php op het delete klikt
function deleteGenre($id){
		$genre = getGenreById($id);
	render("moviedatabase/genres/delete", ['genre' => $genre]); // Dit toont de moviedatabase/genres/delete.php
}

function deleteAGenre($id){
	if(deleteThisGenre($id)){ // Dit voert de 'deleteThisGenre' functie in de GenreModel uit.
echo "<script>alert('Genre verwijderd'); window.location = '/Moviedatabase_MVC/genre/genres/';</script>";
}
else{
	$_SESSION['error'] = 'true';

	header('Location:/Moviedatabase_MVC/genre/genres/');
}}

/* 4. Edit
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word uitgevoerd als je in de moviedatabase/genre/genres.php op een edit klikt
function editGenre($id){
		$genre = getGenreById($id); // Dit voert de 'getGenreById' functie in de GenreModel uit.
	render("moviedatabase/genres/edit", ['genre' => $genre]); // Dit toont de moviedatabase/genres/edit.php
}
// Dit word uitgevoerd als je in de moviedatabase/genres/edit.php op opslaan klikt
function saveEdit(){
		update($_POST); // Dit voert de 'update' functie in de GenreModel uit.
	echo "<script>alert('Genre is aangepast'); window.location = '/Moviedatabase_MVC/genre/genres/';</script>";
}
