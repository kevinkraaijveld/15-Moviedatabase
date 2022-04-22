<!--  Kevin Kraaijveld PHP Moviedatabase / series / create.php -->
<h3>Voeg een nieuwe aflevering toe aan <?= $film[0]['film_name']?></h3>
<div>
  <!-- Dit formulier gaat naar de functie 'createEpisode' in SerieController.php-->
  <form action="<?=URL?>serie/createEpisode/<?= $film[0]['film_id']?>" method="POST" autocomplete="off">
    <label for="fname">Naam aflevering</label>
    <input type="text" id="episode_name" name="episode_name" minlength="2" maxlength="50" placeholder="Naam aflevering" required>
    <!-- Haalt het aantal seizoenen uit het database en maakt daar een dropdown van -->
    <label for="fname">Seizoen</label>
    <select name="season_id">
        <?php
        $numb = $film[0]['film_season'];
        for ($i = 1; $i <= $numb; $i++) : ?>
          <option value="<?= $i?>">
            <?= $i?>
          </option>
        <?php endfor; ?>
    </select>
    <!-- Welk nummer de aflevering heeft in het seizoen -->
    <label for="fname">Aflevering nummer</label>
    <input type="number" id="episode_nr" name="episode_nr" minlength="2" maxlength="10" placeholder="Nummer aflevering" required>
    <!-- Hoe lang een aflevering duurt -->
    <label for="fname">Duur aflevering</label>
    <input type="text" id="episode_duration" name="episode_duration" minlength="2" maxlength="10" placeholder="Duur aflevering" required>
    <!-- Geeft het film_id als hidden waarde mee -->
    <input type="hidden" name="film_id" value="<?= $film[0]['film_id'] ?>">

    <input type="submit" value="Versturen">
    <input type="button" name="cancel" value="Annuleren" onClick="window.location='/Moviedatabase_MVC/serie/seeSerie/<?= $film[0]['film_id']?>';" />
  </form>
</div>
