<!--  Kevin Kraaijveld PHP Moviedatabase / films / create.php -->
<h3>Voeg een nieuwe film toe</h3>
<div>
  <!-- Dit formulier gaat naar de functie 'createFilm' in FilmController.php-->
  <form action="<?=URL?>film/createFilm" method="POST" autocomplete="off">
    <!-- Toont de naam van een film -->
    <label for="fname">Naam film</label>
    <input type="text" id="film_name" name="film_name" minlength="2" maxlength="25" placeholder="Naam film" required>
    <!-- Toont radio buttons voor film en serie-->
    <label for="fname">Type film</label>
    <br>
    <label><input type="radio" name="type_id" value="1" checked> Movie<br></label>
    <br>
    <label><input type="radio" name="type_id" value="2"> Serie<br></label>
    <br><br>
    <!-- Toont een dropdown met de genres -->
    <label for="fname">Genre</label>
    <select name="genre_id" >
      <?php foreach ($genres as $genre) { ?>
            <option value="<?= $genre['genre_id']?>">
              <?= $genre['genre_description']?>
            </option>
      <?php } ?>
    </select>
    <!-- Toont de duur van een film -->
    <label for="fname">Duur film</label>
    <input type="number" id="film_duration" name="film_duration" minlength="2" maxlength="10" placeholder="Duur film">
    <!-- Toont het anatal afleveringen -->
    <label for="fname">Aantal afleveringen</label>
    <input type="text" id="film_episodes" name="film_episodes" minlength="1" maxlength="3" placeholder="Aantal afleveringen">
    <!-- Toont de rating -->
    <label for="fname">Rating</label>
    <input type="number" id="film_rating" name="film_rating" minlength="1" maxlength="1"  min="0" max="5" placeholder="Rating">
    <!-- Toont de origin -->
    <label for="fname">Origin</label>
    <input type="text" id="film_origin" name="film_origin" minlength="1" maxlength="25" placeholder="Origin">

    <input type="submit" value="Versturen">
    <input type="button" name="cancel" value="Annuleren" onClick="window.location='/Moviedatabase_MVC/';" />
  </form>
</div>
