<!--  Kevin Kraaijveld PHP Moviedatabase / genres / create.php -->

<h3>Voeg een nieuwe genre toe</h3>
<div>
  <!-- Dit formulier gaat naar de functie 'createGenre' in GenreController.php-->
  <form action="<?=URL?>genre/createGenre" method="POST" autocomplete="off">
    <!-- De naam van het genre -->
    <label for="fname">Naam genre</label>
    <input type="text" id="genre_description" name="genre_description" minlength="2" maxlength="10" placeholder="Naam genre" required>

    <input type="submit" value="Versturen">
    <input type="button" name="cancel" value="Annuleren" onClick="window.location='/Moviedatabase_MVC/genre/genres';" />
  </form>
</div>
