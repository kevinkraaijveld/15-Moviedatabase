<?php
/*  Kevin Kraaijveld PHP TypeModel
============================================================================

1. Algemeen

============================================================================ */

/* 1. Algemeen
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


// Dit word aangeroepen door de 'createFilm' functie in de FilmController
function getAllTypes(){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM types ORDER BY `types`.`type_description` ASC";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

// Dit word aangeroepen door de 'seeType' functie in de TypesController en de 'seeGenre' in de GenreController
function getTypeById($id){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `types` where type_id = :id ";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

// Dit word aangeroepen door de 'seeType' functie in de TypesController
function getTypeByName($id){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `films`  where type_id = :id ";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

/*Made by Kevin Kraaijveld*/
