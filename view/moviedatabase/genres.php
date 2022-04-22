<!--  Kevin Kraaijveld PHP Moviedatabase / genres.php -->
<!--  Als het genre gelinkt is met een film toont hij een 'niet verwijderd' alert-->
<?php
  session_start();
  if(isset($_SESSION['error'])){
?>
    <script>alert('Genre niet verwijderen');</script>
<?php
    unset($_SESSION['error']);
  }
?>
	<h2>Genres</h2>
<div>
<?php
	foreach ($genres as $genre => $value) {
		$id = $value['genre_id'];
		$description = $value['genre_description'];
		// Toont alle genres met een edit en delete functie, Als je op een h4 klikt sorteert hij alle films met dat genre
		echo '<h1>' . $id . '</h1>';
		echo '<h4>' . "<a href='" . URL . "genre/seeGenre/" . $value['genre_id'] . "'>" . $description . "</a>" . '</h4>';;
		echo "<a class='editthis' href = '" . URL . "genre/editGenre/" . $value["genre_id"]. "'>Edit</a>";
		echo " ";
		echo "<a class='deletethis' href = '" . URL . "genre/deleteGenre/" . $value["genre_id"]. "'>Delete</a>";
	}
?>
</div>
<br><br><br>
<a id='createGenre' href='<?=URL?>genre/createGenre'>+ Voeg genre toe</a>
	<a class='middle' href='<?=URL?>'>Home</a>
<br><br>
