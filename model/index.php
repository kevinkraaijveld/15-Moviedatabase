<!--  Kevin Kraaijveld PHP Moviedatabase / index.php -->
	<h2>Movie Database</h2>
<br><br>
	<table class="sortable">
		<thead>
			<tr>
				<th>Id</th>
				<th>Naam</th>
				<th>Type</th>
				<th>Genre</th>
				<th>Duur</th>
				<th>Episodes</th>
				<th>Rating</th>
				<th>Origin</th>
				<th class="sorttable_nosort" colspan="2">Action</th>
			</tr>
		</thead>
			<tbody>
		 		<?php
			 		foreach ($films as $film) {
				 		echo "<tr>";
							echo "<th>" . $film['film_id'] . "</th>";
							// Als het type id gelijk is aan de serie_id moet hij een link tonen naar de seeSerie functie in de serieController
							// En anders gewoon de film tonen
							if($film['type_id'] == 2){
								echo "<th>" . "<a href='" . URL . "serie/seeSerie/" . $film['film_id'] . "'>" . $film['film_name']  . "</a>" . "</th>";
							}else{
								echo "<th>" . $film['film_name']  . "</th>";
							}
							// Toont het type
					 		echo "<th>" . "<a href='" . URL . "types/seeType/" . $film['type_id'] . "'>" . $film['type_description']  . "</th>";
							// Toont het genre
							echo "<th>" . "<a href='" . URL . "genre/seeGenre/" . $film['genre_id'] . "'>" . $film['genre_description']  . "</a>" . "</th>";
							// Toont de duur, als de duur meer dan nul is moet er 'min' achter
					 		echo "<th>" . $film['film_duration'];
								if($film['film_duration']>0){echo " min" . "</th>";}
							// Toont aantal afleveringen
					 		echo "<th>" . $film['film_episodes']  . "</th>";
							// Toont de rating, als de rating meer dan nul is moet er '/5' achter
							echo "<th>" . "<a href='" . URL . "film/seeRating/" . $film['film_rating'] . "'>" . $film['film_rating'];
								if($film['film_rating']>0){echo " /5" . "</th>";}
							// Toont de afkomst van een film
							echo "<th>" . "<a href='" . URL . "film/seeOrigin/" . $film['film_origin'] . "'>" . $film['film_origin']  ."</a>" . "</th>";
							// Toont de aanpassen en verwijderen knoppen
					 		echo "<td class='center'>" . "<a href='" . URL . "film/editFilm/" . $film['film_id'] . "'>Edit</a></td>";
					 		echo "<td class='center'>" . "<a href='" . URL . "film/deleteFilm/" . $film['film_id'] . "'>Delete</a></td>";
				 		echo "</tr>";
		 			?>
		 		<?php } ?>
	 		</tbody>
		</table>
	<br>
		<main>
			<a id='createFilm' href='<?=URL?>film/createFilm'>+ Voeg een film toe</a>
		</main>
