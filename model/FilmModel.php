<?php
/*  Kevin Kraaijveld PHP FilmModel
============================================================================

1. Algemeen
2. Create
3. Delete
4. Edit

============================================================================ */

/* 1. Algemeen
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


// Dit word aangeroepen door de 'deleteFilm' en de 'editFilm' functies in de filmController
function getFilmById($id){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `films`
					INNER JOIN genres on films.genre_id = genres.genre_id
					INNER JOIN types on films.type_id = types.type_id where film_id = :id ";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

// Dit word aangeroepen door de
// 'index' en de 'seeRating' en de 'seeOrigin' functies in de filmController,
// 'seeType' functie in de typesController,
// 'genres' en de  'seeGenre' functies in de genreController
function joinAllFilms(){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `films`
					INNER JOIN genres on films.genre_id = genres.genre_id
					INNER JOIN types on films.type_id = types.type_id";
	$query = $db->prepare($sql);
	$query->execute();
	return $query->fetchAll();
}

// Dit word aangeroepen door de 'seeRating' functies in de filmController
function getRatingById($id){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `films` where film_rating = :id ";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

// Dit word aangeroepen door de 'seeOrigin' functies in de filmController
function getOriginByName($film_origin){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `films`  where film_origin = :film_origin ";
	$query = $db->prepare($sql);
	$query->bindParam(":film_origin", $film_origin);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

/* 2. Create
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word aangeroepen door de 'createFilm' functies in de filmController
function newFilm($data){
	$db = openDatabaseConnection();
	$sql = $db->prepare("INSERT INTO films (film_name , type_id, genre_id, film_duration, film_episodes, film_rating, film_origin)
	VALUES (:film_name, :type_id, :genre_id, :film_duration, :film_episodes, :film_rating, :film_origin);");
	$sql->bindParam(':film_name',$data['film_name'],PDO::PARAM_STR);
	$sql->bindParam(':type_id',$data['type_id'],PDO::PARAM_INT);
	$sql->bindParam(':genre_id',$data['genre_id'],PDO::PARAM_INT);
	$sql->bindParam(':film_duration',$data['film_duration'],PDO::PARAM_INT);
	$sql->bindParam(':film_episodes',$data['film_episodes'],PDO::PARAM_INT);
	$sql->bindParam(':film_rating',$data['film_rating'],PDO::PARAM_INT);
	$sql->bindParam(':film_origin',$data['film_origin'],PDO::PARAM_INT);
	$sql->execute();
}

/* 3. Delete
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word aangeroepen door de 'deleteAFilm' functie in de filmController
function deleteThisFilm($id) {
	$db = openDatabaseConnection();
	$sql = $db->prepare("DELETE FROM films WHERE film_id = :id");
	$sql->bindParam(":id", $id);
	$sql->execute();
}

/* 4. Edit
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word aangeroepen door de 'saveChange' functie in de filmController
function updateFilm($answers){
	$db = openDatabaseConnection();
	$sql = "UPDATE films SET film_name = :film_name, type_id = :type_id, genre_id = :genre_id, film_season= :film_season, film_duration = :film_duration, film_episodes = :film_episodes, film_rating = :film_rating, film_origin= :film_origin WHERE film_id = :film_id";
	$query = $db->prepare($sql);
	$query->bindParam(":film_name", $answers['film_name']);
	$query->bindParam(":type_id", $answers['type_id']);
	$query->bindParam(":genre_id", $answers['genre_id']);
	$query->bindParam(":film_season", $answers['film_season']);
	$query->bindParam(":film_duration", $answers['film_duration']);
	$query->bindParam(":film_episodes", $answers['film_episodes']);
	$query->bindParam(":film_rating", $answers['film_rating']);
	$query->bindParam(":film_id", $answers['film_id']);
	$query->bindParam(":film_origin", $answers['film_origin']);
	$query->execute();
}

/*Made by Kevin Kraaijveld*/
