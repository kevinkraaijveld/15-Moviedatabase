<!--  Kevin Kraaijveld PHP Moviedatabase / genres / edit.php -->
<?php
  $id = $genre[0]['genre_id'];
  $data = $genre[0];
?>

<h3>Pas een genre aan:</h3>
<div>
<!-- Dit formulier gaat naar de functie 'saveEdit' in GenreController.php-->
  <form action="<?=URL?>genre/saveEdit" method="post" autocomplete="off">
    <!-- De naam van het genre -->
    <label for="fname">Naam genre</label>
    <input type="text" id="genre_description" name="genre_description" minlength="2" maxlength="10" value="<?echo $data['genre_description'];?>" required>
    <!-- Geeft het genre_id als hidden waarde mee -->
    <input type="hidden" name="id" value="<?= $data['genre_id'] ?>">

    <input type="submit" value="Versturen">
    <input type="button" name="cancel" value="Annuleren" onClick="window.location='/Moviedatabase_MVC/genre/genres';" />
  </form>
</div>
