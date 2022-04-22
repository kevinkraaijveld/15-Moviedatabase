<?php
/*  Kevin Kraaijveld PHP GenreModel
============================================================================

1. Algemeen
2. Create
3. Delete
4. Edit

============================================================================ */

/* 1. Algemeen
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word aangeroepen door:
// de 'genres' en de 'seeGenre' functies in de GenreController
// de 'seeType' functie in de TypesController
// de 'seeRating' en 'seeOrigin' en 'createFilm' functies in de FilmController
function getAllGenres(){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM genres";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

// Dit word aangeroepen door de 'seeGenre' en de 'deleteGenre' functies in de GenreController en de 'seeRating' en 'seeOrigin' functies in de FilmController
function getGenreById($id){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `genres` where genre_id = :id ";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

// Dit word aangeroepen door de 'seeGenre' functie in de GenreController en de 'seeRating' en 'seeOrigin' functies in de FilmController
function getGenreByName($id){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `films`  where genre_id = :id ";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

/* 2. Create
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word aangeroepen door de 'createGenre'functie in de GenreController
function newGenre($data){
	$db = openDatabaseConnection();
	$sql = $db->prepare("INSERT INTO genres (genre_description)
	VALUES (:genre_description);");
	$sql->bindParam(':genre_description',$data['genre_description'],PDO::PARAM_STR);
	$sql->execute();
}


/* 3. Delete
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word aangeroepen door de 'deleteAGenre' functie in de GenreController
function deleteThisGenre($id) {
	$db = openDatabaseConnection();
	$sql = $db->prepare("DELETE FROM genres WHERE genre_id = :id");
	$sql->bindParam(":id", $id);
	return $sql->execute();
}

/* 4. Edit
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word aangeroepen door de 'saveEdit' functie in de FilmController
function update($answers){
	$db = openDatabaseConnection();
	$sql = "UPDATE genres SET genre_description = :genre_description WHERE genre_id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':genre_description',$answers['genre_description']);
	$query->bindParam(":id", $answers['id']);
	$query->execute();
}

/*Made by Kevin Kraaijveld*/
