<?php
/*  Kevin Kraaijveld PHP SerieModel
============================================================================

1. Algemeen
2. Create
3. Delete
4. Edit

============================================================================ */

/* 1. Algemeen
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


// Dit word aangeroepen door de 'seeSerie' en de 'createEpisode'  functie in de SerieController
function getAllEpisodes($id){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `films`
					INNER JOIN genres on films.genre_id = genres.genre_id
					INNER JOIN types on films.type_id = types.type_id where films.film_id = :id ";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

// Dit word aangeroepen door de 'seeSerie' en de 'deleteEpisode'  en de 'editEpisode' functie in de SerieController
function getTheEpisodes($id){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `episodes`
					INNER JOIN films on films.film_id = episodes.film_id where films.film_id = :id ";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

// Dit word aangeroepen door de 'seeSerie' functie in de SerieController
function getDuration($id){
	$db = openDatabaseConnection();
	$sql = "SELECT SUM(episode_duration) FROM `episodes` where episodes.film_id = :id ";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

// Dit word aangeroepen door de 'deleteEpisode' en de 'editEpisode' functie in de SerieController
function getOneEpisodes($id){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `episodes`
					INNER JOIN films on films.film_id = episodes.film_id where episodes.episode_id = :id ";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

/* 2. Create
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word aangeroepen door de 'createEpisode' functie in de SerieController
function newEpisode($data){
	$db = openDatabaseConnection();
	$sql = $db->prepare("INSERT INTO episodes (episode_name, season_id, episode_nr, film_id, episode_duration)
	VALUES (:episode_name, :season_id, :episode_nr, :film_id, :episode_duration);");
	$sql->bindParam(':episode_name',$data['episode_name'],PDO::PARAM_STR);
	$sql->bindParam(':season_id',$data['season_id'],PDO::PARAM_INT);
	$sql->bindParam(':episode_nr',$data['episode_nr'],PDO::PARAM_INT);
	$sql->bindParam(':film_id',$data['film_id'],PDO::PARAM_INT);
	$sql->bindParam(':episode_duration',$data['episode_duration'],PDO::PARAM_INT);
	$sql->execute();
}

/* 3. Delete
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word aangeroepen door de 'deleteAEpisode' functie in de SerieController
function deleteThisEpisode($id) {
	$db = openDatabaseConnection();
		$sql = $db->prepare("DELETE FROM episodes WHERE episode_id = :id");
			$sql->bindParam(":id", $id);
	$sql->execute();
}

/* 4. Edit
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word aangeroepen door de 'saveChange' functie in de SerieController
function updateEpisode($answers){
	$db = openDatabaseConnection();
	$sql = "UPDATE episodes SET episode_name = :episode_name, season_id = :season_id, episode_nr = :episode_nr, episode_duration= :episode_duration, episode_id = :episode_id WHERE episode_id = :episode_id";
	$query = $db->prepare($sql);
	$query->bindParam(":episode_name", $answers['episode_name']);
	$query->bindParam(":season_id", $answers['season_id']);
	$query->bindParam(":episode_nr", $answers['episode_nr']);
	$query->bindParam(":episode_duration", $answers['episode_duration']);
	$query->bindParam(":episode_id", $answers['episode_id']);
	$query->execute();
}

// Dit word aangeroepen door de 'addSeason' functie in de filmController
function addASeason($answers){
	$db = openDatabaseConnection();
	$sql = "UPDATE films SET film_season = :film_season + 1 WHERE film_id = :film_id";
	$query = $db->prepare($sql);
	$query->bindParam(":film_season", $answers['film_season']);
	$query->bindParam(":film_id", $answers['film_id']);
	$query->execute();
}

// Dit word aangeroepen door de 'removeSeason' functie in de filmController
function removeASeason($answers){
	$db = openDatabaseConnection();
	$sql = "UPDATE films SET film_season = :film_season - 1 WHERE film_id = :film_id";
	$query = $db->prepare($sql);
	$query->bindParam(":film_season", $answers['film_season']);
	$query->bindParam(":film_id", $answers['film_id']);
	$query->execute();
}
/*Made by Kevin Kraaijveld*/
