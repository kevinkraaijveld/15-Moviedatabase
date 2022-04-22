<!--  Kevin Kraaijveld PHP Moviedatabase / genres / delete.php -->
<?php
$id = $genre[0]['genre_id'];
$data = $genre[0];
?>

<h3>Verwijder genre:</h3>
<div>
<!-- Dit formulier gaat naar de functie 'deleteAGenre' in GenreController.php-->
  <form action="<?=URL?>genre/deleteAGenre/<?=$genre[0]['genre_id']?>" method="GET" autocomplete="off">
    <!-- De naam van het genre -->
    <label for="fname">Naam genre</label>
    <input type="text" placeholder="<?echo $data['genre_description'];?>" readonly>
    <!-- Geeft het genre_id als hidden waarde mee -->
    <input type="hidden" name="genre_id" value="<?= $id ?>">

    <input type="submit" value="Verwijderen">
    <input type="button" name="cancel" value="Annuleren" onClick="window.location='/Moviedatabase_MVC/genre/genres';" />
  </form>
</div>
