<?php
/*  Kevin Kraaijveld PHP SerieController
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

// Dit word uitgevoerd als je op een serie klikt
function seeSerie($id){
	render("moviedatabase/series/see", // Dit toont de see.php in de view/moviedatabase/series/
		array(
			'film' =>  getAllEpisodes($id), // Voert de 'getAllEpisodes' functie uit in de FilmModel.php
			'duur' => getDuration($id), // Voert de 'getDuration' functie uit in de FilmModel.php
			'episodes' => getTheEpisodes($id) // Voert de 'getTheEpisodes' functie uit in de SerieModel.php
		)
	);
}

/* 2. Create
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word uitgevoerd als je in de moviedatabase/series/see.php op 'voeg een nieuwe aflevering toe' klikt
function createEpisode($id){
	// Als je in het formulier op 'versturen' klikt stuurt hij de array met data naar de SerieModel
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$data=array(
			'episode_name' => $_POST['episode_name'],
			'season_id' => $_POST['season_id'],
			'episode_nr' => $_POST['episode_nr'],
			'film_id' => $_POST['film_id'],
			'episode_duration' => $_POST['episode_duration']
		);

		newEpisode($data); // Dit voert de 'newEpisode' functie in de SerieModel uit
			echo "<script>alert('Aflevering toegevoegd'); window.location = '/Moviedatabase_MVC/';</script>";
 }
	render("moviedatabase/series/create", // Dit toont de moviedatabase/serie/create.php
		array(
			'film' => getAllEpisodes($id)  // Dit voert de 'getAllEpisodes' functie in de SerieModel uit
		)
	);
}

	/* 3. Delete
	++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

	// Dit word uitgevoerd als je in de view/moviedatabase/series/see.php op delete klikt
	function deleteEpisode($id){
			$episode = getTheEpisodes($id); // Dit voert de 'getTheEpisodes' functie in de SerieModel uit
		render("moviedatabase/series/delete",
			array(
			'thisEpisode' => getOneEpisodes($id) // Dit voert de 'getOneEpisodes' functie in de SerieModel uit
			)
		);
	}
	// Dit word uitgevoerd als je in de view/moviedatabase/series/delete.php op bevestigen klikt
	function deleteAEpisode($id){
		deleteThisEpisode($id); // Dit voert de 'deleteThisEpisode' functie in de FilmModel uit.
	echo "<script>alert('Aflevering verwijderd'); window.location = '/Moviedatabase_MVC/';</script>";
	}


/* 4. Edit
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

	// Dit word uitgevoerd als je in de view/moviedatabase/series/see.php op edit klikt
function editEpisode($id){
		$episode = getTheEpisodes($id); // Dit voert de 'getTheEpisodes' functie in de SerieModel uit
	render("moviedatabase/series/edit",
		array(
			'thisEpisode' => getOneEpisodes($id) // Dit voert de 'getOneEpisodes' functie in de SerieModel uit
		)
	); // Dit toont de moviedatabase/films/edit.php
}

// Dit word uitgevoerd als je in de moviedatabase/films/edit.php op opslaan klikt
function saveChange(){
		updateEpisode($_POST); // Dit voert de 'updateEpisode' functie in de SerieModel uit
	echo "<script>alert('Aflevering is aangepast'); window.location = '". URL ."';</script>";
}

function addSeason(){
		addASeason($_POST);
	echo "<script>alert('Seizoen toegevoegd'); window.location = '". URL . "serie/seeSerie/" . $_POST['film_id'] . "';</script>";
}

function removeSeason(){
		removeASeason($_POST);
	echo "<script>alert('Seizoen verwijderd'); window.location = '". URL . "serie/seeSerie/" . $_POST['film_id'] . "';</script>";
}
/*Made by Kevin Kraaijveld*/
