<!--  Kevin Kraaijveld PHP Moviedatabase / films / delete.php -->
<?php
  $id = $film[0]['film_id'];
  $data = $film[0];
?>

<h3>Verwijder <?echo$film[0]['type_description']?></h3>
<div>
<!-- Dit formulier gaat naar de functie 'deleteAPatient' in PatientController.php-->
  <form action="<?=URL?>film/deleteAFilm/<?=$film[0]['film_id']?>" method="GET" autocomplete="off">
      <!-- Toont de naam -->
    	<label for="fname">Naam <?echo$film[0]['type_description']?></label>
      <input type="text" name="film" placeholder="<?echo $data['film_name'];?>" readonly>
      <!-- Toont het type -->
      <label for="fname">Type</label>
      <input type="text" placeholder="<?echo $data['type_description'];?>" readonly>
      <!-- Toont het genre -->
      <label for="fname">Genre</label>
      <input type="text" placeholder="<?echo $data['genre_description'];?>" readonly>
      <!-- Dit toont de duur van een film -->
      <label for="fname">Duur</label>
      <input type="text" placeholder="<?echo $data['film_duration'];?>" readonly>
      <!-- Toont de aantal afleveringen -->
      <label for="fname">Aantal afleveringen</label>
      <input type="text" placeholder="<?echo $data['film_episodes'];?>" readonly>
      <!-- Toont de rating -->
      <label for="fname">Rating</label>
      <input type="text" placeholder="<?echo $data['film_rating'];?>/5" readonly>
      <!-- Toont de origin -->
      <label for="fname">Origin</label>
      <input type="text" placeholder="<?echo $data['film_origin'];?>" readonly>

    <input type="submit" value="Verwijderen">
    <input type="button" name="cancel" value="Annuleren" onClick="window.location='/Moviedatabase_MVC/';" />
  </form>
</div>
